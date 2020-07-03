<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';

    protected  $primarykey = 'id';
    
    protected $fillable = ['date', 'slug', 'title', 'text', 'cat_id'];

    public function post()
   {
   		return $this->belongsTo(Category::class);
   }
}
