<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//



/**
 * APIs
 */
Route::prefix('v1')->namespace('api\v1')->group(function() {

    Route::post('login', 'ApiController@login');
    Route::post('register', 'ApiController@register');
    Route::post('active_code', 'ApiController@activecode');



    Route::prefix('user')->middleware('auth:api')->group(function() {
        Route::post('panel', 'ApiController@userpanel');
        Route::post('control', 'ApiController@control');
        Route::post('income', 'ApiController@income');
        Route::post('setincome', 'ApiController@setincome');
        Route::post('activety', 'ApiController@activety');
        Route::post('u-ticket', 'ApiController@uticket');
        Route::post('collection_blog', 'ApiController@collectionBlog');
        Route::post('blog', 'ApiController@blog');
        Route::post('setblog', 'ApiController@setblog');
        Route::post('robberface', 'ApiController@robberface');

    });

    Route::prefix('admin')->middleware(['auth:api' , 'checkAdmin'])->group(function() {
        Route::post('panel', 'ApiController@adminpanel');
        Route::post('checkout', 'ApiController@checkout');
        Route::post('uwoc', 'ApiController@uwoc');
        Route::post('uwc', 'ApiController@uwc');
        Route::post('bestu', 'ApiController@bestu');
        Route::post('usec', 'ApiController@usec');
        Route::post('a-ticket', 'ApiController@aticket');
        Route::post('robberface', 'ApiController@robberface');
    });



});


//Route::post('/user', function (Request $request) {
//    return auth()->user();
//});