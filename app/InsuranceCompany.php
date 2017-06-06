<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsuranceCompany extends Model
{
    protected $table = 'tbl_insurance_company';
    public $timestamps = false;
    protected $primaryKey = 'insurance_comp_id';
}
