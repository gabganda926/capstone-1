<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maint_pBodilyInjuryController extends Controller
{
    public function index()
    {
      return view('/pages/maintenance/premium-bodily-injury');
    }
}
