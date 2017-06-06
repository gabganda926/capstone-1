<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplaintType extends Model
{
    protected $table = 'tbl_complaint_type';
    public $timestamps = false;
    protected $primaryKey = 'complaintType_id';

}
