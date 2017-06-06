<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    protected $table = 'tbl_company_info';
    public $timestamps = false;
    protected $primaryKey = 'cinfo_id';

}
