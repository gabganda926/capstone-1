<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class z_Queries_topCompanyClientController extends Controller
{
    public function index()
    {
      return view('/pages/queries/topClientCompany');
    }
}
