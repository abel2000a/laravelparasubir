<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formacion extends Model
{
    public $timestamps = false;
    protected $guarded = ["id"];
    protected $table = 'formacion';
}
