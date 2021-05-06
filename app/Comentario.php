<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentario';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];
}
