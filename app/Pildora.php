<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pildora extends Model
{
    protected $table = 'pildora';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];
}
