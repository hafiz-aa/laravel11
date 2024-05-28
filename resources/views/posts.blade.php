<x-layout>
    
  <x-slot:title>{{ $title }}</x-slot:title>
   
  @foreach ($posts as $post)
   
    <article class="p-6 mb-6 bg-white rounded-lg shadow-md">
      <a href="/posts/{{ $post['slug'] }}" class="hover:underline"></a>
        <h2 class="mb-1 text-lg tracking-tight font-bold text-gray-900">{{ $post['title']}} </h2>
      
      <div>
        By <a href="/authors/{{ $post->author->username}}" class="hover:underline text-sm text-gray-600">{{ $post->author->name}} </a> in 
        <a href="#" class="hover:underline text-sm text-gray-600"> Web Programming</a> | {{ $post['created_at']-> format('d M Y') }}
      </div>
      <p class="my-3 font-light">{{ Str::limit($post['body'], 40, '...')}}</p>
      <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
    @endforeach
  
  </x-layout>