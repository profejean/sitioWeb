<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliado extends Model
{
    protected $table = 'aliado';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];
}
