<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function list(Post $post)
    {
        return view('posts/list')->with(['posts' => $post->getByLimit()]);
    } 
    
     public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getByLimit()]);
    }
    
    public function show(Post $post)
    {
        $user = auth()->user();
        $post->user = $user;
        $post->loadCount('likes');
        //$posts = Post::withCount('likes')->orderByDesc('updated_at')->get();
        return view('posts/show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    
    public function search(Request $request)
    {
       $keyword = $request->input('keyword');
       
       $query = Post::query();
       
       if(!empty($keyword)) 
       {
          $query->where('company_name', 'LIKE', "%{$keyword}%");
       }
       
       $posts =$query->get();
       
       return view('posts.index')->with 
          ([
          'posts' => $posts,
          'keyword' => $keyword
          ]);
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $input['user_id'] = Auth::id();
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/' .$post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    
    public function like(Request $request)
    {
        $user_id = Auth::user()->id; 
        $post_id = $request->post_id; 

        $already_liked = Like::where('user_id', $user_id)->where('post_id', $post_id)->first(); 

        if (!$already_liked) { 
            $like = new Like; 
            $like->post_id = $post_id;
            $like->user_id = $user_id;
            $like->save();
        } else {
       
            Like::where('post_id', $post_id)->where('user_id', $user_id)->delete();
    }
    
    $post_likes_count = Post::withCount('likes')->findOrFail($post_id)->likes_count;
    $param = [
        'post_likes_count' => $post_likes_count,
    ];
    return response()->json($param); 
    }
}
