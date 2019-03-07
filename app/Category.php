<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected $fillable = [
    //     'title'
    // ];
    protected $fillable = [
        'title','status',
    ];
    public function posts()
    {
        return $this ->hasmany(Post::class);
    }
}
