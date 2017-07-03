<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class z_Queries_topSalesAgentController extends Controller
{
    public function index()
    {
      return view('/pages/queries/topSalesAgent');
    }
}
