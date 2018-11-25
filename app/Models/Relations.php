<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relations extends Model
{
    protected $table = 'relations';
    protected $fillable = array('type', 'ida', 'idb');
    public $timestamps = false;
}
