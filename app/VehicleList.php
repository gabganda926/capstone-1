<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleList extends Model
{
    protected $table = 'tbl_vehicle_list';
    public $timestamps = false;
    protected $primaryKey = 'vehicle_list_id';

}
