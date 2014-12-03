<?php

class TrashController extends \BaseController {

	/**
	 * Display a listing of trashes
	 *
	 * @return Response
	 */
	public function index()
	{
		$trashes = Trash::all();

		return View::make('manager.trash.index', compact('trashes'));
	}

	/**
	 * Show the form for creating a new trash
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('manager.trash.create');
	}

	/**
	 * Store a newly created trash in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Trash::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Trash::create($data);

		return Redirect::route('manager.trash.index');
	}

	/**
	 * Display the specified trash.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$trash = Trash::findOrFail($id);

		return View::make('manager.trash.show', compact('trash'));
	}

	/**
	 * Show the form for editing the specified trash.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$trash = Trash::find($id);

		return View::make('manager.trash.edit', compact('trash'));
	}

	/**
	 * Update the specified trash in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$trash = Trash::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Trash::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$trash->update($data);

		return Redirect::route('manager.trash.index');
	}

	/**
	 * Remove the specified trash from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Trash::destroy($id);

		return Redirect::route('manager.trash.index');
	}

}
