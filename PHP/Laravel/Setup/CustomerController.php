<?php namespace App\Http\Controllers;

use \App\Models\Customer;

class CustomerController extends Controller {


	public function all() {
		$custsomers = Customer::all();
		return view('customers', ['customers' => $custsomers]);
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
