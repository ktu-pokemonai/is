<?php

class ComplaintResponsesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /complaintresponses
	 *
	 * @return Response
	 */
	public function index()
	{
        $complaints = Complaint::orderBy('updated_at', 'desc')->get();

        return View::make('manager.complaints.index', compact('complaints'));
	}

	public function create()
	{
		//
	}

	public function show($id)
	{
		$complaint = Complaint::findOrFail($id);
        $responses = ComplaintResponse::where('complaint_id', '=', $id)->orderBy('updated_at', 'desc')->get();

        return View::make('manager.complaints.show', compact('complaint', 'responses'));
	}

	public function update($id)
	{
		$data = ['complaint_id' => $id, 'user_id' => Auth::user()->id] + Input::only('text');

        ComplaintResponse::create($data);

        return Redirect::route('manager.complaints.show', [$id]);
	}

}