<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    protected $table = 'tbl_contact_person';
    public $timestamps = false;
    protected $primaryKey = 'cPerson_id';

}
