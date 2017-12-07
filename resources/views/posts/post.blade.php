@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">{{ $post->title }}</h1>
  <p class="lead blog-description">Posted by {{ $post->user->name }}</p>
	<p>{{ $post->content }}</p>
</div>
@endsection
