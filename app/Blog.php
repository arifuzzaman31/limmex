<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'sort_description', 'description', 'blog_image', 'status'];
}
