<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    public $timestamps = false;
    protected $guarded = ["id"];
    protected $table = 'oferta_empleo';
}
