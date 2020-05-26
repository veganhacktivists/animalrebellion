@extends('layouts.app)

@section('content')

  <h3>{{ $blogPost->title }}</h3>

  <h5>{{ $blogPost->header }}</h5>

  {!! $blogPost->content !!}

  <img src="{{ $blogPost->thumbnail_url }}" />
@endsection
