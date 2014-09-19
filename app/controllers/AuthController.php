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
}