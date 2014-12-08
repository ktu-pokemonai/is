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
                return $this->routeSuccess('admin.index', 'Logged in as administrator');
            } elseif (!$user->apartment_id) {
                return $this->routeSuccess('manager.index', 'Logged in as manager');
            } else {
                return $this->routeSuccess('user.index', 'Logged in as user');
            }
        }

        return $this->routeWarning('auth.login', 'Wrong credentials');
    }

    public function logout()
    {
        Auth::logout();

        return $this->routeSuccess('home', 'Logged out successfully');
    }

}