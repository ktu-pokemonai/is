<?php
use Illuminate\View\View;

class UserListComposer {
    public function compose(View $view)
    {
        $users = User::where('is_admin', '=', false)->orWhereNull('is_admin')->get();
        $result = [];

        foreach($users as $user) {
            $result[$user->id] = $user->name();
        }

        $view->with('userslist', $result);
    }
} 