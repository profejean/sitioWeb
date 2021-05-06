<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrusel extends Model
{
    protected $table = 'carrusel';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];
}
