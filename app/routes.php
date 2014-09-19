<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
    return View::make('hello');
});

Route::get('users', function () {
//    phpinfo();
//    $user = new User();
//    $user->login = 'admin';
//    $user->password = Hash::make('ntcn.pth');
//    $user->save();
//    var_dump(Auth::attempt(array('login'=>'admin', 'password'=>'ntcn.pth')));
//    var_dump(Auth::user()->password);
    return (Auth::guest()) ? 'guest' : 'user';
});