<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\vListConnection;

use App\vModelConnection;

use App\vMakeConnection;

use App\vTypeConnection;

use Alert;

use Redirect;

class maint_vListController extends Controller
{
    public function index()
    {
      return view('/pages/maintenance/vehicle list')
      ->with('type',vTypeConnection::all())
      ->with('list',vMakeConnection::all())
      ->with('make',vMakeConnection::all())
      ->with('model',vModelConnection::all());
    }
}
