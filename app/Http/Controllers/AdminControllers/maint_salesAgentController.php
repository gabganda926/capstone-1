<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\salesAgentConnection;

use App\addressConnection;

use App\employeeConnection;

use App\personalInfoConnection;

use App\inscompanyConnection;

use App\clientConnection;

use Alert;

use Redirect;

date_default_timezone_set('Asia/Manila');

class maint_salesAgentController extends Controller
{

  public function __construct(salesAgentConnection $emp, addressConnection $add, personalInfoConnection $personalinfo)
  {
      $this->employee = $emp;
      $this->address = $add;
      $this->pinfo = $personalinfo;
  }

  public function index()
  {
    return view('/pages/admin/maintenance/salesAgent')
    ->with('agent',salesAgentConnection::all())
    ->with('emp',employeeConnection::all())
    ->with('pnf',personalInfoConnection::all())
    ->with('comp',inscompanyConnection::all())
    ->with('client',clientConnection::all())
    ->with('add',addressConnection::all());
  }


  public function add_agent(Request $req)
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
        return $this->add_agent_info($req);
      }
      catch(\Exception $e)
      {
        $message = $e->getMessage();
        if($message == 23000)
        {
            alert()
            ->error('ERROR', $e->getMessage())
            ->persistent("Close");

            return Redirect::back();
        }
        else if($message == 22001)
        {
          alert()
          ->error('ERROR', $e->getMessage())
          ->persistent("Close");

          return Redirect::back();
        }
        else
        {
          alert()
          ->error('ERROR', $e->getMessage())
          ->persistent("Close");

          return Redirect::back();
        }
      }

  }

  public function add_agent_info($req)
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
        $this->pinfo->pinfo_cpnum_1 = $req->pinfo_cpnum_1;
        $this->pinfo->pinfo_cpnum_2 = $req->pinfo_cpnum_2;
        $this->pinfo->pinfo_tpnum = $req->pinfo_tpnum;
        $this->pinfo->pinfo_age = $req->pinfo_bday;
        $this->pinfo->pinfo_gender = $req->pinfo_gender;
        $this->pinfo->pinfo_mail = $req->pinfo_mail; 
        if($req->hasFile('picture'))
        {
          $file = $req->file('picture');

          $extension = \File::extension($file->getClientOriginalName());
          try
          {
            $id = personalInfoConnection::orderBy('pinfo_ID', 'desc')->first();
            $name = $req->cPerson_first_name . "_" . $req->cPerson_last_name  . "_" . ($id->pinfo_ID + 1) . "." . $extension;
          }
          catch(\Exception $e)
          {
            $name = $req->cPerson_first_name . "_" . $req->cPerson_last_name  . "_" . 1 . "." . $extension;
          }

          $this->pinfo->pinfo_picture = $name;

          $file->move(public_path().'/image/sales_agent/', $name);
        }
      
      try
      {
        $this->pinfo->save();
        return $this->add_agnt($req);
      }
      catch(\Exception $e)
      {
        $message = $e->getMessage();
        if($message == 23000)
        {
            alert()
            ->error('ERROR', $e->getMessage())
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
          ->error('ERROR', $e->getMessage())
          ->persistent("Close");

          return Redirect::back();
        }
      }
  }

  public function add_agnt($req)
  {
      $latestid = addressConnection::orderBy('add_ID', 'desc')->first();
      $latestidpinfo = personalInfoConnection::orderBy('pinfo_ID', 'desc')->first();
      $this->employee->agent_add_ID = (int)$latestid->add_ID;
      $this->employee->personal_info_ID = (int)$latestidpinfo->pinfo_ID;
      $this->employee->sales_agent_flag = 1;
      $this->employee->del_flag  = 0;
      $mytime = $req->time;
      $this->employee->created_at = $mytime;
      $this->employee->updated_at = $mytime;
      try
      {
        $this->employee->save();
        alert()
        ->success('Record Saved', 'Success')
        ->persistent("Close");

        return Redirect::back();
      }
      catch(\Exception $e)
      {
        $message = $e->getMessage();
        if($message == 23000)
        {
            alert()
            ->error('ERROR', $e->getMessage())
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
          ->error('ERROR', $e->getMessage())
          ->persistent("Close");

          return Redirect::back();
        }
      }
  }


      public function update_agent(Request $req)
      {
          $address = addressConnection::where('add_ID', '=', $req->aadd_id)->first();

          if($req->aadd_blcknum != null)
          {
            $address->add_blcknum = $req->aadd_blcknum;
          }
          if($req->add_street != null)
          {
            $address->add_street = $req->aadd_street;
          }
          if($req->aadd_subdivision != null)
          {
            $address->add_subdivision = $req->aadd_subdivision;
          }
          if($req->aadd_brngy != null)
          {
            $address->add_brngy = $req->aadd_brngy;
          }
          if($req->aadd_district != null)
          {
            $address->add_district = $req->aadd_district;
          }
          if($req->aadd_city != null)
          {
            $address->add_city = $req->aadd_city;
          }
          if($req->aadd_province != null)
          {
            $address->add_province = $req->aadd_province;
          }
          if($req->aadd_region != null)
          {
            $address->add_region = $req->aadd_region;
          }
          if($req->aadd_zipcode != null)
          {
            $address->add_zipcode = $req->aadd_zipcode;
          }

          try
          {
            $address->save();
            return $this->update_agent_info($req);
          }
          catch(\Exception $e)
          {
            $message = $e->getMessage();
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
              ->error('ERROR', $e->getMessage())
              ->persistent("Close");

              return Redirect::back();
            }
          }
      }

      public function update_agent_info($req)
      {
          $pinfo = personalInfoConnection::where('pinfo_ID', '=', $req->apInfo_ID)->first();

          if($req->hasFile('apicture'))
          {
              $file = $req->file('apicture');

              $extension = \File::extension($file->getClientOriginalName());

              $id = personalInfoConnection::orderBy('pinfo_ID', 'desc')->first();

              if($req->has('acPerson_first_name') && $req->has('acPerson_last_name'))
                $name = $req->acPerson_first_name . "_" . $req->acPerson_last_name  . "_" . $id->pinfo_ID . "." . $extension;
              else if ($req->has('acPerson_first_name'))
                $name = $req->acPerson_first_name . "_" . $pinfo->pinfo_last_name  . "_" . $id->pinfo_ID . "." . $extension;
              else if ($req->has('acPerson_last_name'))
                $name = $pinfo->pinfo_first_name . "_" . $pinfo->pinfo_last_name  . "_" . $id->pinfo_ID . "." . $extension;
              else
                $name = $pinfo->pinfo_picture;

              \File::delete(public_path().'/image/sales_agent/'.$pinfo->pinfo_picture);

              $pinfo->pinfo_picture = $name;

              $file->move(public_path().'/image/sales_agent/', $name);
          }

          $pinfo->pinfo_first_name = $req->acPerson_first_name;
          $pinfo->pinfo_middle_name = $req->acPerson_middle_name;
          $pinfo->pinfo_last_name = $req->acPerson_last_name;
          $pinfo->pinfo_cpnum_1 = $req->apinfo_cpnum_1;
          $pinfo->pinfo_cpnum_2 = $req->apinfo_cpnum_2;
          $pinfo->pinfo_tpnum = $req->apinfo_tpnum;
          $pinfo->pinfo_age = $req->apinfo_bday;
          $pinfo->pinfo_gender = $req->apinfo_gender;
          $pinfo->pinfo_mail = $req->apinfo_mail;

          try
          {
            $pinfo->save();
            return $this->update_data($req);
  		    }
  		    catch(\Exception $e)
  		    {
  		      $message = $e->getMessage();
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
  		        ->error('ERROR', $e->getMessage())
  		        ->persistent("Close");

  		        return Redirect::back();
  		      }
  		    }
      }


      public function update_data($req)
      {
          $employee = salesAgentConnection::where('agent_ID', '=', $req->aemp_id)->first();

          $mytime = $req->atime;
          $employee->updated_at = $mytime;
          try
          {
            $employee->save();
            alert()
  		      ->success('Record Updated', 'Success')
  		      ->persistent("Close");

  		      return Redirect::back();
  		    }
  		    catch(\Exception $e)
  		    {
  		      $message = $e->getMessage();
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
  		        ->error('ERROR', $e->getMessage())
  		        ->persistent("Close");

  		        return Redirect::back();
  		      }
  		    }
      }

      public function delete_agent(Request $req)
      {
          $employee = salesAgentConnection::where('agent_ID', '=', $req->aemp_id)->first();

          $employee->del_flag = 1;
          $mytime = $req->atime;
          $employee->updated_at = $mytime;
          try
          {
            $employee->save();
            alert()
  		      ->success('Record Deleted', 'Success')
  		      ->persistent("Close");

  		      return Redirect::back();
  		    }
  		    catch(\Exception $e)
  		    {
  		      $message = $e->getMessage();
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
  		        ->error('ERROR', $e->getMessage())
  		        ->persistent("Close");

  		        return Redirect::back();
  		      }
  		    }
      }

      public function ardelete_agent(Request $req)
      {
        foreach($req->asd as $ID)
        {
          $employee = salesAgentConnection::where('agent_ID', '=', $ID)->first();

          $employee->del_flag = 1;
          $mytime = $req->time;
          $employee->updated_at = $mytime;

          $employee->save();
        }
      }
}
