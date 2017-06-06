<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeRole extends Model
{
    protected $table = 'tbl_employee_role';
    public $timestamps = false;
    protected $primaryKey = 'emp_role_id';

}
