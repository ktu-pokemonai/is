<?php
use Illuminate\View\View;

class GroupedUserListComposer {
    public function compose(View $view)
    {
        $users = User::whereNotNull('apartment_id')->where('is_admin', '=', false)->get();
        $result = [];

        foreach($users as $user) {
            $result[$user->apartment->nr][$user->id] = $user->name();
        }

        $view->with('userslist', $result);
    }
} 