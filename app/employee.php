<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $primaryKey = "userId";
    public $timestamps = false;
}
