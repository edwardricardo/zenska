<?php namespace App\Http\Controllers;

class MaintenanceController extends Controller{

	public function getIndex(){		
		return view('maintenance.maintenance');
	}
}