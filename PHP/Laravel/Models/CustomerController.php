<?php namespace App\Http\Controllers;

use \App\Models\Customer;

class CustomerController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function all() {
		$custs = Customer::getAll();
		return view('all_customers', ['customers' => $custs]);
	}

	public function get($id) {
		$cust = new Customer($id);
		//print_r($cust);
		return view('customer', ['customer' => $cust]);
	}

	public function create() {
		$cust = new Customer();
		$cust->first_name = 'bob';
		$cust->last_name = 'jonez\'n';
		$cust->email = 'bob@jonz.com';
		$cust->phone = '999-888-7777';
		$cust->save();
		return redirect('/customer/all');
	}

	public function update($id) {
		$cust = new Customer($id);
		$cust->first_name = 'Dale';
		$cust->last_name = 'eNews';
		$cust->email = 'dale@eNews.com';
		$cust->phone = '555-666-7777';
		$cust->save();
		return redirect('/customer/all');
	}

}