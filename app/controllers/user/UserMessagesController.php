<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserMessagesController extends \BaseController
{
    public function index()
    {
        $messages = Message::whereNull('inbox_deleted_at')
                        ->where('user_id', '=',Auth::user()->id)
                        ->orderBy('viewed_at', 'asc')
                        ->orderBy('updated_at', 'desc')
                        ->get();

        return View::make('user.messages.index', compact('messages'));
    }

    public function show($id)
    {
        /** @var Message $message */
        $message = Message::findOrFail($id);

        if($message->user_id !== Auth::user()->id) {
            throw (new ModelNotFoundException)->setModel('Message');
        }

        if(is_null($message->viewed_at)) {
            $message->viewed_at = \Carbon\Carbon::now();
            $message->save();
        }

        return View::make('user.messages.show', compact('message'));
    }

    public function destroy($id)
    {

    }

}