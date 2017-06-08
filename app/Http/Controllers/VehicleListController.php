<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\VehicleList;

use Alert;

use Redirect;

class VehicleListController extends Controller
{
    public function index()
    {
      return view('/pages/maintenance/vehicle list');
    }
}
