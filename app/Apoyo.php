<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apoyo extends Model
{
    protected $table = 'apoyo';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];
}
