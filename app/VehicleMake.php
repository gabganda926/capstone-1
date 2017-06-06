<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleMake extends Model
{
    protected $table = 'tbl_vehicle_make';
    public $timestamps = false;
    protected $primaryKey = 'vehicle_make_id';

}
