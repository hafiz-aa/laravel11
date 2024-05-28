<x-layout>
    
  <x-slot:title>{{ $title }}</x-slot:title>
   
    <article class="p-6 mb-6 bg-white rounded-lg shadow-md">
      
        <h2 class="mb-1 text-lg tracking-tight font-bold text-gray-900">{{ $post['title']}} </h2>
     
      <div class="text-sm text-gray-600">
        By <a href="/authors/{{ $post->author->username}}" class="hover:underline text-sm text-gray-600">{{ $post->author->name}} </a> in 
        <a href="/categories/{{ $post->category->slug}}" class="hover:underline text-sm text-gray-600"> {{ $post->category->name}}</a> | {{ $post['created_at']-> format('d M Y') }}
      </div>
      <p class="my-3 font-light">{{$post['body']}}</p>
      <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo;Back to posts</a>
    </article>
  </x-layout>