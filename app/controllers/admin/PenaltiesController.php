<?php

class PenaltiesController extends \BaseController {

	/**
	 * Display a listing of penalties
	 *
	 * @return Response
	 */
	public function index()
	{
		$penalties = Penalty::all();

		return View::make('admin.penalties.index', compact('penalties'));
	}

	/**
	 * Show the form for creating a new penalty
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.penalties.create');
	}

	/**
	 * Store a newly created penalty in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Penalty::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Penalty::create($data);

        if(Input::has('save_close')) {
            return Redirect::route('admin.penalties.index');
        }

        return $this->routeSaveClose('admin.penalties.create', 'admin.penalties.index', 'Penalty issues successfully');
    }

	/**
	 * Remove the specified penalty from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Penalty::destroy($id);

        return $this->routeSuccess('admin.penalties.index', 'Penalty removed successfully');
	}

}
