<?php

class ApartmentsController extends \BaseController {

	/**
	 * Display a listing of apartments
	 *
	 * @return Response
	 */
	public function index()
	{
		$apartments = Apartment::all();

		return View::make('admin.apartments.index', compact('apartments'));
	}

	/**
	 * Show the form for creating a new apartment
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.apartments.create');
	}

	/**
	 * Store a newly created apartment in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Apartment::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Apartment::create($data);

        if(Input::has('save_close')) {
            return Redirect::route('admin.apartments.index');
        }

        return Redirect::route('admin.apartments.create');
    }

	/**
	 * Display the specified apartment.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$apartment = Apartment::findOrFail($id);

		return View::make('apartments.show', compact('apartment'));
	}

	/**
	 * Show the form for editing the specified apartment.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$apartment = Apartment::find($id);

		return View::make('apartments.edit', compact('apartment'));
	}

	/**
	 * Update the specified apartment in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$apartment = Apartment::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Apartment::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$apartment->update($data);

		return Redirect::route('apartments.index');
	}

	/**
	 * Remove the specified apartment from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Apartment::destroy($id);

		return Redirect::route('admin.apartments.index');
	}

}
