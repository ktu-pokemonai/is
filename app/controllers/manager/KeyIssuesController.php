<?php

class KeyIssuesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /keyissues
	 *
	 * @return Response
	 */
	public function index()
	{
        $keysIssues = KeyIssue::whereNull('returned_at')->get();

		return View::make('manager.keys.index', compact('keysIssues'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /keyissues/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('manager.keys.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /keyissues
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all() + ['issued_at' => \Carbon\Carbon::now()];

        KeyIssue::create($data);

        return Redirect::route('manager.keys.index');
	}


	public function update($id)
	{
        /** @var KeyIssue $issue */
		$issue = KeyIssue::findOrFail($id);

        $issue->returned_at = \Carbon\Carbon::now();
        $issue->save();

        return Redirect::route('manager.keys.index');
	}


}