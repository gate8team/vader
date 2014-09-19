<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 20.09.14
 * Time: 2:45
 */

class AuthController extends BaseController {
    public function signIn() {
        return View::make('front/auth/signin');
    }

    public function signUp() {
        return View::make('front/auth/signup');
    }

    public function logIn() {
        if (Auth::attempt(array('login'=>Input::get('login'), 'password'=>Input::get('password')))) {
            return Redirect::to('dashboard')->with('message', 'You are now logged in!');
        } else {
            return Redirect::to('login')
                ->with('message', 'Your username/password combination was incorrect')
                ->withInput();
        }
    }

    public function logOut() {
        Auth::logout();
        return Redirect::to('login')->with('message', 'Your are now logged out!');
    }
}