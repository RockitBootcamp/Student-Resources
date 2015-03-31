<?php // file: app/Http/Controllers/UserController.php

namespace App\Http\Controllers;
use App\Models\User;
use Validator;
use Request;

class UserController extends Controller {

	/**
	 * List
	 */
	public function all() {
		$users = User::all();
		return $users; // Use a real view here
	}

	/**
	 * Profile
	 */
	public function get($user_id) {
		$user = new User($user_id);
		return $user; // Use a real view here
	}

	/**
	 * Form
	 */
	public function form($user_id = '') {

		// Start View Settings
		$viewSettings = [];

		// If the User ID is present, add user to viewSettings
		if (!empty($user_id)) {
			$user = new User($user_id);
			$viewSettings = $user->getData();
		}

		// Return View
		return view('user.form', $viewSettings);

	}

	/**
	 * Process New and Edit Form
	 */
	public function processForm() {

		// Validate the input
		$validator = Validator::make(Request::all(), [
			'first_name' => 'required|max:40',
			'last_name' => 'required|max:40',
			'email' => 'required|email|max:100',
			'gender' => 'in:m,f|max:1'
		]);

		// If Validation Failed
		if ($validator->fails()) {
			return $validator->messages(); // Do something better here
		}

		// User Model (Either existing or empty)
		$user = new User(Request::input('user_id'));

		// Edit Properties
		$user->first_name = Request::input('first_name');
		$user->last_name  = Request::input('last_name');
		$user->email      = Request::input('email');
		$user->gender     = Request::input('gender');
		$user_id          = $user->save();

		// Redirect to the user's profile page
		return redirect('/user/profile/' . $user_id);

	}

}
