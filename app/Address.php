<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'tbl_address';
    public $timestamps = false;
    protected $primaryKey = 'add_id';
}
