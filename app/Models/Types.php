<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    //
    protected $table = 'types';
    protected $fillable = array('id', 'title');
    public $timestamps = false;
}
