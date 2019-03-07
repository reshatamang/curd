<?php

namespace App;


use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $fillable = [
    //     'category',
    // ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
