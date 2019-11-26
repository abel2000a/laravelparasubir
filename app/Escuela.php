<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    public $timestamps = false;
    protected $guarded = ["id"];
    protected $table = 'escuela_prof';
}
