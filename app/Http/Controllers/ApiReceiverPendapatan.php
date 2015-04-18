<?php namespace App\Http\Controllers;

class ApiReceiverPendapatan extends Controller {
	public function __construct(){
		$this->middleware('guest');
	}

	public function index(){
		$pendapatans = Pendapatan::all();
		return response()->json(['name' => $pendapatans , 'state' => 'CA']);
	}
}