<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caes extends Model
{
    public $timestamps = false;

    protected $table = 'caes';

    protected $fillable = array('nome', 'raca');
}
