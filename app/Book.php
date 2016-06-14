<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'year', 'description', 'slug'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
