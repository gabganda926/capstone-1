<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'tbl_bank';
    public $timestamps = false;
    protected $primaryKey = 'bank_id';
}
