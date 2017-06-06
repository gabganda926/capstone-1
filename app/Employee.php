<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'tbl_employee';
    public $timestamps = false;
    protected $primaryKey = 'emp_id';

}
