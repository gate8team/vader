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
            return Redirect::to('dashboard')
                    ->with('message', Lang::get('messages.auth.statuses.loggedIn'));
        } else {
            Session::flash('message', Lang::get('messages.auth.statuses.logInError'));
            Session::flash('message-class', 'alert-danger');

            return Redirect::to('login')
                ->withInput();
        }
    }

    public function register() {
        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->passes()) {
            $user = new User();
            $user->login = Input::get('login');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();

            return Redirect::to('login')
                    ->with('message', Lang::get('messages.auth.statuses.registered'));
        } else {
            Session::flash('message', Lang::get('messages.auth.statuses.registerError'));
            Session::flash('message-class', 'alert-danger');

            return Redirect::to('signup')
                    ->withErrors($validator)
                    ->withInput();
        }
    }

    public function logOut() {
        Auth::logout();
        
        return Redirect::to('login')
                ->with('message', Lang::get('messages.auth.statuses.loggedOut'));
    }
}