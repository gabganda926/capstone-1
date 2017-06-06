<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bank;

use App\ContactPerson;

use App\CompanyInfo; //NADAGDAG TO, WALA PANG FUNCTION

use App\PersonalInfo;

use App\Address;

use Alert;

use Redirect;

class BankController extends Controller
{
    public function __construct(ContactPerson $contactPerson,Bank $bnk, Address $add, PersonalInfo $personalinfo)
    {
        $this->banko = $bnk;
        $this->address = $add;
        $this->cPerson = $contactPerson;
        $this->pinfo = $personalinfo;
    }

    public function index()
    {
      return view('/pages/maintenance/bank')//page link from local drive
      ->with('bank',Bank::all())//data from database
      ->with('cpr',ContactPerson::all())
      ->with('pInfo',PersonalInfo::all())
      ->with('add',Address::all());
    }

    public function add_bank(Request $req)
    {
        if($req->add_blcknum != null)
        {
          $this->address->add_blcknum = $req->add_blcknum;
        }
        if($req->add_street != null)
        {
          $this->address->add_street = $req->add_street;
        }
        if($req->add_subdivision != null)
        {
          $this->address->add_subdivision = $req->add_subdivision;
        }
        if($req->add_brngy != null)
        {
          $this->address->add_brngy = $req->add_brngy;
        }
        if($req->add_district != null)
        {
          $this->address->add_district = $req->add_district;
        }
        if($req->add_city != null)
        {
          $this->address->add_city = $req->add_city;
        }
        if($req->add_province != null)
        {
          $this->address->add_province = $req->add_province;
        }
        if($req->add_region != null)
        {
          $this->address->add_region = $req->add_region;
        }
        if($req->add_zipcode != null)
        {
          $this->address->add_zipcode = $req->add_zipcode;
        }

      try
      {
        $this->address->save();
        return $this->add_cpersoninfo($req);
      }
      catch(\Exception $e)
      {
        $message = $e->getCode();
        if($message == 23000)
        {
            alert()
            ->error('ERROR', 'Data already exist!')
            ->persistent("Close");

            return Redirect::back();
        }
        else if($message == 22001)
        {
          alert()
          ->error('ERROR', 'Exceed Max limit of column!')
          ->persistent("Close");

          return Redirect::back();
        }
        else
        {
          alert()
          ->error('ERROR', $e->getCode())
          ->persistent("Close");

          return Redirect::back();
        }
      }
    }

    public function add_cpersoninfo($req)
    {
        if ($req->cPerson_middle_name == null)
        {
        $this->pinfo->pinfo_first_name = $req->cPerson_first_name;
        $this->pinfo->pinfo_last_name = $req->cPerson_last_name;
        }
        else
        {
          $this->pinfo->pinfo_first_name = $req->cPerson_first_name;
          $this->pinfo->pinfo_middle_name = $req->cPerson_middle_name;
          $this->pinfo->pinfo_last_name = $req->cPerson_last_name;
        }
        $this->pinfo->pinfo_contact = $req->cPerson_contact;
        $this->pinfo->pinfo_mail = $req->cPerson_email;

        try
        {
          $this->pinfo->save();
          return $this->add_cPerson($req);
        }
        catch(\Exception $e)
        {
          $message = $e->getCode();
          if($message == 23000)
          {
              alert()
              ->error('ERROR', 'Data already exist!')
              ->persistent("Close");

              return Redirect::back();
          }
          else if($message == 22001)
          {
            alert()
            ->error('ERROR', 'Exceed Max limit of column!')
            ->persistent("Close");

            return Redirect::back();
          }
          else
          {
            alert()
            ->error('ERROR', $e->getCode())
            ->persistent("Close");

            return Redirect::back();
          }
        }
    }

    public function add_cPerson($req)
    {
        $latestidpinfo = PersonalInfo::orderBy('pinfo_ID', 'desc')->first();
        $this->cPerson->personal_info_ID = (int)$latestidpinfo->pinfo_ID;
        try
        {
          $this->cPerson->save();
          return $this->add_data($req);
        }
        catch(\Exception $e)
        {
          $message = $e->getCode();
          if($message == 23000)
          {
              alert()
              ->error('ERROR', 'Data already exist!')
              ->persistent("Close");

              return Redirect::back();
          }
          else if($message == 22001)
          {
            alert()
            ->error('ERROR', 'Exceed Max limit of column!')
            ->persistent("Close");

            return Redirect::back();
          }
          else
          {
            alert()
            ->error('ERROR', $e->getCode())
            ->persistent("Close");

            return Redirect::back();
          }
        }
    }

    public function add_data($req)
    {
        $latestid = Address::orderBy('add_ID', 'desc')->first();
        $cpersonid = ContactPerson::orderBy('cPerson_ID', 'desc')->first();
        $this->banko->bank_name = $req->bank_name;
        $this->banko->bank_code = $req->bank_code;
        $this->banko->bank_add_ID = (int)$latestid->add_ID;
        $this->banko->bank_cperson_ID = (int)$cpersonid->cPerson_ID;
        $mytime = $req->time;
        $this->banko->created_at = $mytime;
        $this->banko->updated_at = $mytime;
        $this->banko->del_flag = 0;
        try
        {
          $this->banko->save();
          alert()
          ->success('Record Saved', 'Success')
          ->persistent("Close");

          return Redirect::back();
        }
        catch(\Exception $e)
        {
          $message = $e->getCode();
          if($message == 23000)
          {
              alert()
              ->error('ERROR', 'Data already exist!')
              ->persistent("Close");

              return Redirect::back();
          }
          else if($message == 22001)
          {
            alert()
            ->error('ERROR', 'Exceed Max limit of column!')
            ->persistent("Close");

            return Redirect::back();
          }
          else
          {
            alert()
            ->error('ERROR', $e->getCode())
            ->persistent("Close");

            return Redirect::back();
          }
        }
    }

    public function update_bank(Request $req)
    {
        $addres = Address::where('add_ID', '=', $req->aaddid)->first();

        if($req->aadd_blcknum != null)
        {
          $addres->add_blcknum = $req->aadd_blcknum;
        }
        if($req->aadd_street != null)
        {
          $addres->add_street = $req->aadd_street;
        }
        if($req->aadd_subdivision != null)
        {
          $addres->aadd_subdivision = $req->aadd_subdivision;
        }
        if($req->aadd_brngy != null)
        {
          $addres->add_brngy = $req->aadd_brngy;
        }
        if($req->aadd_district != null)
        {
          $addres->add_district = $req->aadd_district;
        }
        if($req->aadd_city != null)
        {
          $addres->add_city = $req->aadd_city;
        }
        if($req->aadd_province != null)
        {
          $addres->add_province = $req->aadd_province;
        }
        if($req->aadd_region != null)
        {
          $addres->add_region = $req->aadd_region;
        }
        if($req->aadd_zipcode != null)
        {
          $addres->add_zipcode = $req->aadd_zipcode;
        }

        try
        {
          $addres->save();
          return $this->update_cperson_info($req);
        }
        catch(\Exception $e)
        {
          $message = $e->getCode();
          if($message == 23000)
          {
              alert()
              ->error('ERROR', 'Data already exist!')
              ->persistent("Close");

              return Redirect::back();
          }
          else if($message == 22001)
          {
            alert()
            ->error('ERROR', 'Exceed Max limit of column!')
            ->persistent("Close");

            return Redirect::back();
          }
          else
          {
            alert()
            ->error('ERROR', $e->getCode().$e->getMessage())
            ->persistent("Close");

            return Redirect::back();
          }
        }
    }

    public function update_cperson_info($req)
    {
        $pinfo = PersonalInfo::where('pinfo_ID','=',$req->pinfo_ID)->first();
        $pinfo->pinfo_first_name = $req->acPerson_first_name;
        $pinfo->pinfo_middle_name = $req->acPerson_middle_name;
        $pinfo->pinfo_last_name = $req->acPerson_last_name;
        $pinfo->pinfo_contact = $req->acPerson_contact;
        $pinfo->pinfo_mail = $req->acPerson_email;
        try
      {
        $pinfo->save();
        return $this->update_data($req);
      }
      catch(\Exception $e)
      {
        $message = $e->getCode();
        if($message == 23000)
        {
            alert()
            ->error('ERROR', 'Data already exist!')
            ->persistent("Close");

            return Redirect::back();
        }
        else if($message == 22001)
        {
          alert()
          ->error('ERROR', 'Exceed Max limit of column!')
          ->persistent("Close");

          return Redirect::back();
        }
        else
        {
          alert()
          ->error('ERROR', $e->getCode().$e->getMessage())
          ->persistent("Close");

          return Redirect::back();
        }
      }
    }

    public function update_data(Request $req)
    {
        $bank = Bank::where('bank_ID', '=', $req->abnkid)->first();

        $bank->bank_name = $req->abank_name;
        $bank->bank_code = $req->abank_code;
        $mytime = $req->atime;
        $bank->updated_at = $mytime;
        try
        {
          $bank->save();
          alert()
          ->success('Record Updated', 'Success')
          ->persistent("Close");

          return Redirect::back();
        }
        catch(\Exception $e)
        {
          $message = $e->getCode();
          if($message == 23000)
          {
              alert()
              ->error('ERROR', 'Data already exist!')
              ->persistent("Close");

              return Redirect::back();
          }
          else if($message == 22001)
          {
            alert()
            ->error('ERROR', 'Exceed Max limit of column!')
            ->persistent("Close");

            return Redirect::back();
          }
          else
          {
            alert()
            ->error('ERROR', $e->getCode().$e->getMessage())
            ->persistent("Close");

            return Redirect::back();
          }
        }
    }

    public function delete_bank(Request $req)
    {
        $banko = Bank::where('bank_ID', '=', $req->abnkid)->first();

        $banko->del_flag = 1;
        $banko->updated_at = $req->time;

        try
        {
          $banko->save();
          alert()
          ->success('Record Deleted', 'Success')
          ->persistent("Close");

          return Redirect::back();
        }
        catch(\Exception $e)
        {
          $message = $e->getCode();
          if($message == 23000)
          {
              alert()
              ->error('ERROR', 'Data already exist!'.$e->getMessage())
              ->persistent("Close");

              return Redirect::back();
          }
          else if($message == 22001)
          {
            alert()
            ->error('ERROR', 'Exceed Max limit of column!')
            ->persistent("Close");

            return Redirect::back();
          }
          else
          {
            alert()
            ->error('ERROR', $e->getCode())
            ->persistent("Close");

            return Redirect::back();
          }
        }
    }

    public function ardelete_bank(Request $req)
    {
        foreach($req->asd as $ID)
        {
            $banko = Bank::where('bank_ID', '=', $ID)->first();

            $banko->del_flag = 1;
            $banko->updated_at = $req->time;

            $banko->save();
        }
    }
}
