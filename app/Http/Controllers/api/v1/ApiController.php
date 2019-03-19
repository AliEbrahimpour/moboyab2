<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Support\Facades\Password;
use App\Action;
use App\Blog;
use App\Event;
use App\Http\Resources\BlogCollection;
use App\RoberFace;
use App\Ticket;
use App\User;
use App\UserWallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Blog as BlogResource;
use App\Http\Resources\UserWallet as UserWalletResource;
use App\Http\Resources\Ticket as TicketResource;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{

    private $verifysms =0;

    public function login(Request $request)
    {
        $validData = $this->validate($request, [
            'email' => 'required|exists:users',
            'password' => 'required'
        ]);

        if(! auth()->attempt($validData)) {
            return response([
                'data' => 'اطلاعات صحیح نیست',
                'status' => 'error'
            ],403);
        }

        $this->verifysms = str_random(4);
//        Smsirlaravel::sendVerification($verifysms,auth()->user()->mobile);

        $token = $this->createToken();
        return new UserResource(auth()->user() , $token);
    }

    public function register(Request $request)
    {
        // Validation Data
        $validData = $this->validate($request, [
            'firstname' => 'required|string|max:25',
            'lastname' => 'required|string|max:25',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:6',
        ]);


        $user = User::create([
            'firstname' => $validData['firstname'],
            'lastname' => $validData['lastname'],
            'email' => $validData['mobile'],
            'password' => bcrypt($validData['password']),
            'api_token' => str_random(100),
        ]);

        auth()->login($user);
        $token = $this->createToken();
        return new UserResource($user , $token);
    }

    private function createToken()
    {
        auth()->user()->tokens()->delete();
        return auth()->user()->createToken('Api Token')->accessToken;
    }

    public function activecode(User $user){
        return $this->verifysms;
    }

    public function fpassword(Request $request)
    {
        $validData = $request->validate(['email' => 'required|email']);
        return new UserResource(User::findEmail($validData['email']));

    }

    //---------------------------------------------------------------------------------------------
    //Admin Panel
    public function adminpanel(){
        return 'adminpanel';
    }

    public function checkout(UserWallet $userWallet){
        return $waiting = $userWallet->incomefilter('waiting','harvest')->get();
    }

    //user with out code
    public function uwoc(){
        return DB::table("users")->select('*')->whereNotIn('id',function($query) {
            $query->select('user_id')->from('user_wallets');
        })->paginate(5);
    }

    //user with code
    public function uwc(){
        return DB::table('user_wallets')
            ->leftJoin('users', 'user_id', '=', 'users.id')
            ->paginate(10);
    }

    //best user
    public function bestu(){
        return DB::table('user_wallets')
            ->select(DB::raw('caller_id , count(*) as user_count'))
            ->groupBy('caller_id')->orderByDesc('user_count')->get();
    }

    //count use of code
    public function usec(){
        return json_decode(DB::table('events')
            ->select(DB::raw('action_id , count(*) as action_count'))
            ->groupBy('action_id')->orderByDesc('action_count')->get());
    }

    public function aticket(){
        return Ticket::paginate(5);
    }

    public function collectionBlog(){
        return new BlogCollection(Blog::paginate(5)) ;
    }

    public function blog(Request $request){

        $blog = Blog::find($request->id);
        return new BlogResource($blog);
    }

    public function setblog(Request $request){

        $validData = $this->validate($request, [
            'title' => 'required|string|min:6',
            'description' => 'required',
            'body' => 'required|string|min:10',
            'images_one' => 'required|string|min:10',
            'images_two' => 'required|string|min:10',
            'images_three' => 'required',
            'news_status' => 'required',
            'user_id' => 'required|exists:users'
        ]);
        $blog =Blog::create([
            'title' => $validData['title'],
            'description' => $validData['description'],
            'body' => $validData['body'],
            'images_one' => $validData['images_one'],
            'images_two' => $validData['images_two'],
            'images_three' => $validData['images_three'],
            'news_status' => $validData['news_status'],
            'user_id' => \auth()->user()->id,
        ]);
        return new BlogResource($blog);
    }

    public function allactivety(User $user){
        return Event::whereUserId($user->id)->get();
    }




    //---------------------------------------------------------------------------------------------
    //User Panel
    public function userpanel(){
        return 'userpanel';
    }

    public function control(){
        return Action::all();
    }

    public function income(UserWallet $userWallet,User $user){
         $waiting = $userWallet->incomefilter('waiting','deposit')->whereCallerId($user->id);
         $accept = $userWallet->incomefilter('accept','deposit')->whereCallerId($user->id);
        return [
            new UserWalletResource($waiting) ,
            new UserWalletResource($accept)
        ];
    }
    public function activety(){
        return Event::whereUserId(\auth()->user()->id)->get();
    }

    public function uticket(Request $request,Ticket $ticket){

        $validData = $this->validate($request, [
            'title' => 'required|string|min:6',
            'priority' => 'required',
            'message' => 'required|string|min:10',
        ]);

        $ticket =Ticket::create([
            'title' => $validData['title'],
            'priority' => $validData['priority'],
            'message' => $validData['message'],
        ]);

    return new TicketResource($ticket);
    }

    public function robberface(){
        return RoberFace::paginate(5);
    }

    public function setincome(Request $request){
        $userwallet = UserWallet::create([
            'user_id' => \auth()->user()->id,
            'caller_id' => '0',
            'type' => 'deposit',
            'amount' => $request->amount,
            'status' => 'waiting'
        ]);
    }

}
