<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];
}
