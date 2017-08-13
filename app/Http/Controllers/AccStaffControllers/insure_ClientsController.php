<?php

namespace App\Http\Controllers\AccStaffControllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\personalInfoConnection;

use App\contactPersonConnection;

use App\inscompanyConnection;

use App\addressConnection;

use App\installmentConnection;

use App\salesAgentConnection;

use App\bankConnection;

use App\clientConnection;

use App\policynoConnection;

use App\vModelConnection;

use App\vMakeConnection;

use App\vTypeConnection;

use App\premiumDGConnection;

use App\premiumPAConnection;

use App\paymentDetailConnection;

use App\clientAccountsConnection;

use Redirect;

use Alert;

class insure_ClientsController extends Controller
{
    public function __construct(clientAccountsConnection $clientAccount, paymentDetailConnection $paymentDetail)   
    {
        $this->cacc = $clientAccount;
        $this->ptail = $paymentDetail;
    }

    public function index()
    {
      return view('pages.accounting-staff.transaction.insure-client')
      ->with('address',addressConnection::all())
      ->with('pInfo',personalInfoConnection::all())
      ->with('cperson',contactPersonConnection::all())
      ->with('company',inscompanyConnection::all())
      ->with('salesA',salesAgentConnection::all())
      ->with('client',clientConnection::all())
      ->with('policy',policynoConnection::all())
      ->with('vModel',vModelConnection::all())
      ->with('vMake',vMakeConnection::all())
      ->with('vType',vTypeConnection::all())
      ->with('ppa',premiumPAConnection::orderBy('insuranceLimit')->get())
      ->with('pdg',premiumDGConnection::orderBy('insuranceLimit')->get());
    }

    public function send_data_individual(Request $req)
    {
      $type = $req->client_type1;
      $type = $req->client_type2;

      if($type == 0)
      {
        return view('pages.accounting-staff.transaction.payment-details')
        ->with('client_ID', $req->client_individual)
        ->with('insurance_company', $req->indi_insurance_company)
        ->with('policy_number', $req->indi_policy_number)
        ->with('vehicle_type', $req->indi_vtype)
        ->with('vehicle_make', $req->indi_vmake)
        ->with('vehicle_model', $req->indi_vmodel)
        ->with('plate_number', $req->indi_plate_number)
        ->with('serial_chassis', $req->indi_schassis)
        ->with('motor_engine', $req->indi_mengine)
        ->with('mv_file_number', $req->indi_mfilenum)
        ->with('color', $req->indi_color)
        ->with('personal_accident_ID', $req->indi_pa)
        ->with('bodily_injury_ID', $req->indi_bi)
        ->with('property_damage_ID', $req->indi_pd)
        ->with('created_at', $req->indi_date_issued)
        ->with('form_picture', $req->indi_formImage)
        ->with('type', $req->client_type1)
        ->with('details', $req)
        ->with('address',addressConnection::all())
        ->with('banko',bankConnection::all())
        ->with('pInfo',personalInfoConnection::all())
        ->with('cperson',contactPersonConnection::all())
        ->with('instype',installmentConnection::all())
        ->with('company',inscompanyConnection::all())
        ->with('salesA',salesAgentConnection::all())
        ->with('client',clientConnection::all())
        ->with('policy',policynoConnection::all())
        ->with('vModel',vModelConnection::all())
        ->with('vMake',vMakeConnection::all())
        ->with('vType',vTypeConnection::all())
        ->with('ppa',premiumPAConnection::where('premiumPA_ID', $req->indi_pa)->first())
        ->with('pbi',premiumDGConnection::where('premiumDG_ID', $req->indi_bi)->first())
        ->with('pdg',premiumDGConnection::where('premiumDG_ID', $req->indi_pd)->first());
      }
      if($type == 1)
      {
        return view('pages.accounting-staff.transaction.payment-details')
        ->with('client_ID', $req->client_company)
        ->with('insurance_company', $req->comp_insurance_company)
        ->with('policy_number', $req->comp_policy_number)
        ->with('vehicle_type', $req->comp_vtype)
        ->with('vehicle_make', $req->comp_vmake)
        ->with('vehicle_model', $req->comp_vmodel)
        ->with('plate_number', $req->comp_plate_number)
        ->with('serial_chassis', $req->comp_schassis)
        ->with('motor_engine', $req->comp_mengine)
        ->with('mv_file_number', $req->comp_mfilenum)
        ->with('color', $req->comp_color)
        ->with('personal_accident_ID', $req->comp_pa)
        ->with('bodily_injury_ID', $req->comp_bi)
        ->with('property_damage_ID', $req->comp_pd)
        ->with('created_at', $req->comp_date_issued)
        ->with('form_picture', $req->comp_formImage)
        ->with('type', $req->client_type2)
        ->with('details', $req)
        ->with('address',addressConnection::all())
        ->with('banko',bankConnection::all())
        ->with('pInfo',personalInfoConnection::all())
        ->with('cperson',contactPersonConnection::all())
        ->with('instype',installmentConnection::all())
        ->with('company',inscompanyConnection::all())
        ->with('salesA',salesAgentConnection::all())
        ->with('client',clientConnection::all())
        ->with('policy',policynoConnection::all())
        ->with('vModel',vModelConnection::all())
        ->with('vMake',vMakeConnection::all())
        ->with('vType',vTypeConnection::all())
        ->with('ppa',premiumPAConnection::where('premiumPA_ID', $req->comp_pa)->first())
        ->with('pbi',premiumDGConnection::where('premiumDG_ID', $req->comp_bi)->first())
        ->with('pdg',premiumDGConnection::where('premiumDG_ID', $req->comp_pd)->first());
      }
    }

    public function save_insurance_account(Request $req)
    {
        $this->cacc->client_ID = $req->data_client_ID;
        $this->cacc->insurance_company = $req->data_insurance_company;
        $this->cacc->policy_number = $req->policy_number;
        $this->cacc->vehicle_type = $req->data_vehicle_type;
        $this->cacc->vehicle_make = $req->data_vehicle_make;
        $this->cacc->vehicle_model = $req->data_vehicle_model;
        $this->cacc->plate_number = $req->data_plate_number;
        $this->cacc->serial_chassis = $req->data_serial_chassis;
        $this->cacc->motor_engine = $req->data_motor_engine;
        $this->cacc->mv_file_number = $req->data_mv_file_number;
        $this->cacc->color = $req->data_color;
        $this->cacc->inception_date = $req->data_inception_date;
        $this->cacc->form_picture = $req->data_form_picture;
        $this->cacc->del_flag = 0;
        $this->cacc->created_at = $req->data_created_at;
        $this->cacc->updated_at = $req->data_created_at;

        try
        {
          $this->cacc->save();
          return $this->save_payment_details($req);
        }
        catch(\Exception $e)
        {
          $message = $e->getMessage();
          if($message == 23000)
          {
              alert()
              ->error('ERROR', 'Data already exist!')
              ->persistent("Close");

              return Redirect::to('/accounting-staff/transaction/insure-client')->withInput();
          }
          else if($message == 22001)
          {
            alert()
            ->error('ERROR', 'Exceed Max limit of column!')
            ->persistent("Close");

              return Redirect::to('/accounting-staff/transaction/insure-client')->withInput();
          }
          else
          {
            alert()
            ->error('ERROR', $e->getMessage())
            ->persistent("Close");

              return Redirect::to('/accounting-staff/transaction/insure-client')->withInput();
          }
        }
    }

    public function save_payment_details($req)
    {
        $id = clientAccountsConnection::where('client_ID','=', $req->data_client_ID)->first();
        $this->ptail->account_ID = $id->account_ID;
        $this->ptail->personal_accident_ID = $req->data_personal_accident_ID;
        $this->ptail->bodily_injury_ID = $req->data_bodily_injury_ID;
        $this->ptail->property_damage_ID = $req->data_property_damage_ID;
        $this->ptail->payment_type = $req->payment_type;
        if($req->payment_type == 1)
        {
            $this->ptail->payment_status = 1;
        }
        if($req->payment_type == 2)
        {
            $this->ptail->payment_status = 0;
            $this->ptail->bank_ID = $req->data_bank_ID;
            $this->ptail->installment_type = $req->data_installment_ID;
        }

        try
        {
          $this->ptail->save();
          alert()
          ->success('Success', 'Record Saved!')
          ->persistent("Close");

          return Redirect::to('/accounting-staff/transaction/insure-client');
        }
        catch(\Exception $e)
        {
          $message = $e->getMessage();
          if($message == 23000)
          {
              alert()
              ->error('ERROR', 'Data already exist!')
              ->persistent("Close");

              return Redirect::to('/accounting-staff/transaction/insure-client')->withInput();
          }
          else if($message == 22001)
          {
            alert()
            ->error('ERROR', 'Exceed Max limit of column!')
            ->persistent("Close");

              return Redirect::to('/accounting-staff/transaction/insure-client')->withInput();
          }
          else
          {
            alert()
            ->error('ERROR', $e->getMessage())
            ->persistent("Close");

              return Redirect::to('/accounting-staff/transaction/insure-client')->withInput();
          }
        }
    }

    //return DB::select('call add_checkvoucher("amount","date","verifiedby")');
}
