@extends('layouts.app')

@section('title')
  {{ $blogPost->title }}
@endsection

@section('content')
  <div class="container">
    <h1 class="h1 mb-4">{{ $blogPost->header }}</h1>

  <h5>{{ $blogPost->header }}</h5>

  {!! $blogPost->content !!}

  <img src="{{ $blogPost->thumbnail_url }}" />
@endsection
