<?php

class ApartmentsController extends \BaseController {

	/**
	 * Display a listing of apartments
	 *
	 * @return Response
	 */
	public function index()
	{
		$apartments = Apartment::orderBy('nr')->get();

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

        return $this->routeSaveClose('admin.apartments.create', 'admin.apartments.index', 'Apartment created successfully');
    }

	/**
	 * Remove the specified apartment from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        /** @var Apartment $apartment */
        $apartment = Apartment::findOrFail($id);
        if(!$apartment->users->isEmpty()) {
            return $this->routeWarning('admin.apartments.index', 'Cannot remove apartment, because it has registered users');
        }

        $apartment->delete();

		return $this->routeSuccess('admin.apartments.index', 'Apartment deleted successfully');
	}

}
