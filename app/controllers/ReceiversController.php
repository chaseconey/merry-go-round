<?php

class ReceiversController extends \BaseController {

	/**
	 * Display a listing of receivers
	 *
	 * @return Response
	 */
	public function index() {
		$receivers = Receiver::paginate();

		return View::make('receivers.index', compact('receivers'));
	}

	/**
	 * Store a newly created receiver in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$validator = Validator::make($data = Input::all(), Receiver::$rules);

		if ($validator->fails()) {
			return Redirect::back()
				->withErrors($validator)
				->withInput();
		}

		Receiver::create($data);

		return Redirect::route('receivers.index');
	}

	/**
	 * Show the form for editing the specified receiver.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id) {
		$receiver = Receiver::find($id);

		return View::make('receivers.edit', compact('receiver'));
	}

	/**
	 * Update the specified receiver in storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update($id) {
		$receiver = Receiver::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Receiver::$rules);

		if ($validator->fails()) {
			return Redirect::back()
				->withErrors($validator)
				->withInput();
		}

		$receiver->update($data);

		return Redirect::route('receivers.index');
	}

	/**
	 * Figure out who should receive next call
	 *
	 * @return \Illuminate\Database\Eloquent\Model|null|static
	 */
	public function nextReceiver() {

		$distribution = Receiver::select(DB::raw('receivers.*, count(*) as call_count'))
			->leftJoin('calls', 'calls.receiver_id', '=', 'receivers.id')
			->groupBy('receivers.id')
			->orderBy('call_count', 'asc');

		if ($excludes = Input::get('excludes')) {
			$distribution = $distribution->whereNotIn('receivers.id', $excludes);
		}

		return $distribution->first();

	}

}
