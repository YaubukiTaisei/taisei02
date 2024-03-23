<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>就活easy</title>
   </head>
   <h1 class="p-4 mb-4 text-blue-900 font-bold bg-blue-100">就活easy</h1>
   <x-app-layout>
        <body class="antialiased">
       
        <form action="/posts/search" method="get">
            @csrf
            <div class="w-2/3 m-auto mt-5 mb-5">
            <input type="search" name="keyword" placeholder="企業名を入力">
            <input type="submit" name="submit" value="検索">
            </div>
        </form>
        
        <div class='posts space-y-12'>
            @foreach($posts as $post)
               <div class='post'>
                <div class='mb-6 ml-5'>
                  <a href="/posts/{{ $post->id }}"><h2 class='company_name'>{{ $post->company_name }}</h2></a>
                </div>
                <div class='ml-10'>
                  <div class="flex justify-left items-center gap-4 mb-8">
                       <p class='selection_type_id text-2xl ...'>{{ $post->selection_type->type }}</p>
                       <p class='occupation text-gray-800'>{{ $post->occupation }}</p>
                       <p class='result_id text-gray-800'>{{ $post->result->process }}</p>
                  </div>
                   <p class='question underline decoration-solid mb-8'>Q.{{ $post->question }}</p>
                   <p class='answer mb-8'>A.{{ $post->answer }}</p>
                </div>
                <div class='ml-40'>
                   <form action ="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="button" onclick="deletePost({{ $post->id }})">削除</button>
                   </form>
                </div>
               </div>
            @endforeach
        </div>
        <script>
           function deletePost(id) {
               'use strict'
               
               if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
                   document.getElementById(`form_${id}`).submit();
               }
            }
        </script>
        </body>
    </x-app-layout>
</html>