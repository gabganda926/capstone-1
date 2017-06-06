<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $table = 'tbl_personal_info';
    public $timestamps = false;
    protected $primaryKey = 'pinfo_id';

}
