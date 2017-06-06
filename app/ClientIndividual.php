<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientIndividual extends Model
{
    protected $table = 'tbl_client_individual';
    public $timestamps = false;
    protected $primaryKey = 'client_ind_id';

}
