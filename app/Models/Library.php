<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $table = 'library';
    protected $fillable = array('id', 'title_kz', 'etimology', 'termin', 'orphography', 'title_ru', 'title_en', 'title_cn', 'title_tr', 'title_de', 'title_kg', 'title_uz', 'title_az', 'title_tm');
    public $timestamps = true;
}
