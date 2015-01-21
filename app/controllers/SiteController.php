<?php

class SiteController extends BaseController {

	/**
	 * @return $this
	 */
	public function index() {

		$calls = $this->getLast5Calls();
		$distribution = $this->getDistribution();

		return View::make('site.index')
			->with('calls', $calls)
			->with('distribution', $distribution);
	}

	private function getLast5Calls() {
		return Call::with('creator', 'receiver')
			->limit(5)
			->orderBy('created_at', 'desc')
			->get();
	}

	private function getDistribution() {
		return Call::with('receiver')
			->select(DB::raw('receiver_id, count(1) as call_count'))
			->groupBy('receiver_id')
			->get();
	}

}
