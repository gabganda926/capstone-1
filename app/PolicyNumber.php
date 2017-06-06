<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PolicyNumber extends Model
{
    protected $table = 'tbl_policynumber';
    public $timestamps = false;
    protected $primaryKey = 'policynum_id';

}
