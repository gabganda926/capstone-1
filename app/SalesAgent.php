<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesAgent extends Model
{
    protected $table = 'tbl_sales_agent';
    public $timestamps = false;
    protected $primaryKey = 'agent_id';
}
