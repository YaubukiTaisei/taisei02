<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectionTypeController extends Controller
{
     public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
