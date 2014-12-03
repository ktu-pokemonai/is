<?php

class AuthController extends BaseController
{
    public function login()
    {
        return View::make('auth.login');
    }

    public function attempt()
    {
        $result = Auth::attempt(Input::only(['username', 'password']), (bool)Input::get('remember_me'), true);

        if($result) {
            /** @var User $user */
            $user = Auth::user();

            if($user->is_admin) {
                return Redirect::route('admin.index');
            } elseif (!$user->apartment_id) {
                return Redirect::route('manager.index');
            } else {
                return Redirect::route('user.index');
            }
        }

        return Redirect::route('auth.login');
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::route('home');
    }

}