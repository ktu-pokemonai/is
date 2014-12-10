<?php

class MessagesController extends \BaseController {

	/**
	 * Display a listing of messages
	 *
	 * @return Response
	 */
	public function index()
	{
		$messages = Message::whereNull('outbox_deleted_at')->get();

		return View::make('admin.messages.index', compact('messages'));
	}

	/**
	 * Show the form for creating a new message
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.messages.create');
	}

	/**
	 * Store a newly created message in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Message::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Message::create($data);

        return $this->routeSaveClose('admin.messages.create', 'admin.messages.index', 'Message sent successfully');
    }

	/**
	 * Remove the specified message from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        /** @var Message $message */
		$message = Message::findOrFail($id);

        $message->outbox_deleted_at = \Carbon\Carbon::now();
        $message->save();

		return Redirect::route('admin.messages.index');
	}

}
