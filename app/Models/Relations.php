<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    protected $table = 'relations';
    protected $fillable = array('id', 'type', 'ida', 'idb');
    public $timestamps = true;
}
