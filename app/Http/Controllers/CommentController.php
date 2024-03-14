<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request,Post $post)
    {
        $comment = Comment::create([
            'body' => $request['body'],
            'user_id' => auth()->user()->id,
            'post_id' => $post->id
            ]);
            return back();
    }
    
    public function delete(Comment $comment)
    {
        $comment->delete();
        return back();
    }
}
