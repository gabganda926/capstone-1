<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    protected $table = 'tbl_vehicle_model';
    public $timestamps = false;
    protected $primaryKey = 'vehicle_model_id';

}
