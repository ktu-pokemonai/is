<?php

class ComplaintsController extends \BaseController {

	/**
	 * Display a listing of complaints
	 *
	 * @return Response
	 */
	public function index()
	{
		$complaints = Complaint::where('user_id','=', Auth::user()->id)->get();

		return View::make('user.complaints.index', compact('complaints'));
	}

	/**
	 * Show the form for creating a new complaint
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.complaints.create');
	}

	/**
	 * Store a newly created complaint in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = ['user_id' => Auth::user()->id] + Input::only('text');
		$validator = Validator::make($data, Complaint::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Complaint::create($data);

		return Redirect::route('user.complaints.index');
	}

	/**
	 * Display the specified complaint.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	}

	/**
	 * Show the form for editing the specified complaint.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$complaint = Complaint::find($id);

		return View::make('complaints.edit', compact('complaint'));
	}

	/**
	 * Update the specified complaint in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$complaint = Complaint::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Complaint::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$complaint->update($data);

		return Redirect::route('complaints.index');
	}

	/**
	 * Remove the specified complaint from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Complaint::destroy($id);

		return Redirect::route('complaints.index');
	}

}
