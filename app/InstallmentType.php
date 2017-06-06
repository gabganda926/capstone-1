<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstallmentType extends Model
{
    protected $table = 'tbl_installment_type';
    public $timestamps = false;
    protected $primaryKey = 'installment_id';

}
