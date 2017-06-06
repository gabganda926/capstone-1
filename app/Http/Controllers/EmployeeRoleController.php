<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EmployeeRole;

use App\Employee;

use App\PersonalInfo;

use Alert;

use Redirect;

class EmployeeRoleController extends Controller
{
	public function __construct(EmployeeRole $jobt)
	{
	  $this->jobtitle = $jobt;
	}

	public function index()
	{
	  return view('/pages/maintenance/employeeRole')
      ->with('empd',Employee::all())
      ->with('pnf',PersonalInfo::all())
	  ->with('jobtitle',EmployeeRole::all());
	}   

	public function add_job(Request $req)
  {
    $this->jobtitle->jobtitle_Name = $req->Employee_type;
    $this->jobtitle->jobtitle_Desc = $req->EmployeeType_desc;
    $mytime = $req->time;
    $this->jobtitle->created_at = $mytime;
    $this->jobtitle->updated_at = $mytime;
    $this->jobtitle->del_flag = 0;

    try
    {
      $this->jobtitle->save();
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

  public function update_job(Request $req)
  {
    $jobtitle = EmployeeRole::where('jobtitle_ID','=',$req->id)->first();

    $jobtitle->jobtitle_Name = $req->aEmployee_type;
    $jobtitle->jobtitle_Desc = $req->aEmployeeType_desc;
    $mytime = $req->atime;
    $jobtitle->updated_at = $mytime;

    try
    {
      $jobtitle->save();
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
        ->error('ERROR', $e->getCode())
        ->persistent("Close");

        return Redirect::back();
      }
    }
  }

  public function delete_job(Request $req)
  {
    $jobtitle = EmployeeRole::where('jobtitle_ID','=',$req->id)->first();
    $jobtitle->del_flag = 1;
    $mytime = $req->atime;
    $jobtitle->updated_at = $mytime;
    try
    {
      $jobtitle->save();
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

  public function ardelete_job(Request $req)
  {
    foreach($req->asd as $ID)
    {
      $jobtitle = EmployeeRole::where('jobtitle_ID','=',$ID)->first();
      $jobtitle->del_flag = 1;
      $mytime = $req->time;
      $jobtitle->updated_at = $mytime;

      $jobtitle->save();
    }
  }

}
