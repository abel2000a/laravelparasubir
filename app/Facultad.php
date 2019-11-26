<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'facultad_id';
    protected $guarded = ["id"];
    protected $table = 'facultad';
}
