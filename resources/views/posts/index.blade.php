@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Post</h1>
  <p class="lead blog-description">All posts should belong here.</p>
	@foreach ($posts as $post)
		<div class="blog-post">
			<a href="/posts/{{ $post->id }}"><h2 class="blog-post-title">{{ $post->title }}</h2></a>
			<p class="blog-post-meta">ID: {{ $post->id }}</p>
			<p>{{ $post->content }}</p>
		</div>
	@endforeach
</div>
@endsection
