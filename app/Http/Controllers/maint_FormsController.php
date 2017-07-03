<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Alert;

use Redirect;

class maint_FormsController  extends Controller
{
	public function __construct()
	{

	}

	public function index()
	{
	  return view('/pages/maintenance/iforms');
	}   
	
}
