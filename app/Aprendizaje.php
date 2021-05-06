<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aprendizaje extends Model
{
    protected $table = 'aprendizaje';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];
}
