<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class z_Utilities_TemplatesController extends Controller
{
    public function index()
    {
      return view('/pages/admin/utilities/adm/templates');
    }
}
