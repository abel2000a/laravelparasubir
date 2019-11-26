<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    public $timestamps = false;
    protected $guarded = ["id"];
    protected $table = 'exp_laboral';
}
