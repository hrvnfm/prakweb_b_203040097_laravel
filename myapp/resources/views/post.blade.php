@extends('layouts.main')

@section('container')
    <h1 class="mb-2">{{ $post->title }}</h1>
    <h5 >By : Hervin Fakhrul in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    {!! $post->body !!}

    <br>
<a href="/posts">Back to Posts</a>
@endsection
