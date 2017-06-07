<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\VehicleMake;

use App\VehicleModel;

use Alert;

use Redirect;

class VehicleMakeController extends Controller
{
  public function __construct(VehicleMake $make)
  {
      $this->mke = $make;
  }

  public function index()
  {
    return view('/pages/maintenance/vehicle make')
    ->with('make',VehicleMake::all())
    ->with('model',VehicleModel::all());
  }

  public function add_vMake(Request $req)
  {
    $this->mke->vehicle_make_name = $req->vehicle_make_name;
    $this->mke->del_flag = 0;
    $mytime = $req->time;
    $this->mke->created_at = $mytime;
    $this->mke->updated_at = $mytime;

    try
    {
      $this->mke->save();
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

  public function update_vMake(Request $req)
  {
     $mke = VehicleMake::where('vehicle_make_ID', '=', $req->id)->first();
     $mke->vehicle_make_name = $req->avehicle_make_name;
     $mytime = $req->atime;
     $mke->updated_at = $mytime;

     try
      {
        $mke->save();
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

  public function delete_vMake(Request $req)
  {
     $mke = VehicleMake::where('vehicle_make_ID', '=', $req->id)->first();
     $mke->del_flag = 1;
     $mytime = $req->atime;
     $mke->updated_at = $mytime;
     try
     {
       $mke->save();
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

  public function ardelete_vMake(Request $req)
  {
    foreach($req->asd as $ID)
    {
     $mke = VehicleMake::where('vehicle_make_ID', '=', $ID)->first();
     $mke->del_flag = 1;
     $mytime = $req->time;
     $mke->updated_at = $mytime;

     $mke->save();
    }
  }

}
