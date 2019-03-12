<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    protected $fillable = [
        'firstname','email', 'password','code','api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [
//        'password', 'remember_token',
//    ];

    public function isAdmin()
    {
        return $this->role == 'admin' ? true : false;
    }

    public function user_wallet(){
        return $this->belongsTo(UserWallet::class);
    }

    public function tickets(){
        return $this->belongsToMany(Ticket::class);
    }

}
