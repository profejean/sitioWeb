<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identidad extends Model
{
    protected $table = 'identidad';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];
}
