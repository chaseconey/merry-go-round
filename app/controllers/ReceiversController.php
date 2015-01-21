<?php

class ReceiversController extends \BaseController {

	/**
	 * Display a listing of receivers
	 *
	 * @return Response
	 */
	public function index()
	{
		$receivers = Receiver::all();

		return View::make('receivers.index', compact('receivers'));
	}

	/**
	 * Show the form for creating a new receiver
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('receivers.create');
	}

	/**
	 * Store a newly created receiver in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Receiver::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Receiver::create($data);

		return Redirect::route('receivers.index');
	}

	/**
	 * Display the specified receiver.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$receiver = Receiver::findOrFail($id);

		return View::make('receivers.show', compact('receiver'));
	}

	/**
	 * Show the form for editing the specified receiver.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$receiver = Receiver::find($id);

		return View::make('receivers.edit', compact('receiver'));
	}

	/**
	 * Update the specified receiver in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$receiver = Receiver::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Receiver::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$receiver->update($data);

		return Redirect::route('receivers.index');
	}

	/**
	 * Remove the specified receiver from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Receiver::destroy($id);

		return Redirect::route('receivers.index');
	}

}
