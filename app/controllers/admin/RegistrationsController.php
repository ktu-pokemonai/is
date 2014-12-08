<?php

class RegistrationsController extends \BaseController {

	/**
	 * Display a listing of registrations
	 *
	 * @return Response
	 */
	public function index()
	{
		$registrations = Registration::all();

		return View::make('admin.registrations.index', compact('registrations'));
	}

	/**
	 * Show the form for editing the specified registration.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$registration = Registration::find($id);

		return View::make('admin.registrations.edit', compact('registration'));
	}

	/**
	 * Update the specified registration in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        /** @var Registration $registration */
		$registration = Registration::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Registration::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

        $data['username'] = Str::slug($data['first_name'] . ' ' . $data['last_name'], '.');
        $data['password'] = Str::random();
        if(isset($data['apartment_id']) && !$data['apartment_id']) {
            unset($data['apartment_id']);
        }

        $user = User::create($data);
        $registration->delete();

        $message = sprintf('User %s created with password %s', $data['username'], $data['password']);
		if(Input::has('save_close')) {
            return Redirect::route('admin.registrations.index')->with('success', $message);
        }

        $nextRegistration = Registration::first();

        if(!$nextRegistration) {
            return Redirect::route('admin.registrations.index');
        }

        return Redirect::route('admin.registrations.edit', [$nextRegistration->id]);
    }

	/**
	 * Remove the specified registration from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Registration::destroy($id);

		return Redirect::route('admin.registrations.index');
	}

}
