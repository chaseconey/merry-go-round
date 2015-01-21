<?php

class AuthController extends BaseController {

	public function login() {
		return View::make('auth.index');
	}

	public function postLogin() {

		$credentials = [
			'email' => Input::get('email'),
			'password' => Input::get('password')
		];

		if (!Auth::attempt($credentials)) {
			Flash::error('Incorrect credentials');
			return Redirect::back()
				->withInput();
		}

		return Redirect::to('/');

	}

}
