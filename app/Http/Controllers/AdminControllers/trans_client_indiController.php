<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\addressConnection;

use App\clientConnection;

use App\personalInfoConnection;

use App\salesAgentConnection;

use App\policynoConnection;

use App\clientTypeConnection;

class trans_client_indiController extends Controller
{
  public function __construct(clientConnection $cli, addressConnection $add, personalInfoConnection $personalinfo)
  {
      $this->client = $cli;
      $this->address = $add;
      $this->pinfo = $personalinfo;
  }

  public function index()
  {
    return view('pages/admin/transaction/insurance-individual')
    ->with('client',clientConnection::all())
    ->with('sales',salesAgentConnection::all())
    ->with('pInfo',personalInfoConnection::all())
    ->with('add',addressConnection::all());
  }

  public function display_info(Request $req)
  {
    return view('pages/admin/transaction/insurance-details-individual')
    ->with('client', clientConnection::where('client_ID', $req->data_ID)->first())
    ->with('sales',salesAgentConnection::all())
    ->with('pInfo',personalInfoConnection::all())
    ->with('add',addressConnection::all());
  }
}
