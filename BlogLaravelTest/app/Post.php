<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // try to find model category
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
