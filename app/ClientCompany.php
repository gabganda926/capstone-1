<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientCompany extends Model
{
    protected $table = 'tbl_client_company';
    public $timestamps = false;
    protected $primaryKey = 'client_comp_id';
}
