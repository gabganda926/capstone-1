<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class z_Utilities_GeneralSettingsController extends Controller
{
    public function index()
    {
      return view('/pages/utilities/adm/general');
    }
}
