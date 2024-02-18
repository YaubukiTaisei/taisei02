<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
     public function posts()
     {
        return $this->hasMany(Post::class);
     }
}
