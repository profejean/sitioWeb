<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terapeuta extends Model
{
    protected $table = 'terapeuta';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];
}
