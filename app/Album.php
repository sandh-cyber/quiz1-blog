<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';

    protected  $primarykey = 'id';

    protected $fillable = ['name', 'text', 'photos_id'];
}
