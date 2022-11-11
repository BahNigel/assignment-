<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    //table name
    protected $table = 'employees';
    // primary key
    public $primayKey = 'id';
    // Timestamps
    public $timestamps = true;

}
