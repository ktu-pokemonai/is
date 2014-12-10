<?php

class GuestsController extends \BaseController {

	/**
	 * Display a listing of guests
	 *
	 * @return Response
	 */
	public function index()
	{
		$guests = Guest::whereNull('left_at')->get();

		return View::make('manager.guests.index', compact('guests'));
	}

	/**
	 * Show the form for creating a new guest
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('manager.guests.create');
	}

	/**
	 * Store a newly created guest in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Guest::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

        $data['updated_at'] = null;
		Guest::create($data);

		return Redirect::route('manager.guests.index');
	}

	/**
	 * Display the specified guest.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	}

	/**
	 * Show the form for editing the specified guest.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$guest = Guest::find($id);

		return View::make('manager.guests.edit', compact('guest'));
	}

	/**
	 * Update the specified guest in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$guest = Guest::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Guest::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$guest->update($data);

		return Redirect::route('manager.guests.index');
	}

	/**
	 * Remove the specified guest from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $guest = Guest::findOrFail($id);

        $guest->left_at = \Carbon\Carbon::now();
        $guest->save();

        return $this->routeSuccess('manager.guests.index', 'Guest registered as left');
	}

}
