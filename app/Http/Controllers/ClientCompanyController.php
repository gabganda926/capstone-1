<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ClientCompany;

use App\Address;

use App\CompanyInfo;

use App\ContactPerson;

use App\SalesAgent;

use Alert;

use Redirect;

class ClientCompanyController extends Controller
{
    public function index()
    {
      return view('/pages/maintenance/clientCompany');
    }
}
