@extends('layouts.app')

@section('title')
  {{ $blogPost->title }}
@endsection

@section('content')
  <div class="container">

    <h5>{{ $blogPost->header }}</h5>

    <div>
      <img src="{{ $blogPost->thumbnail_url }}" class="img-fluid" style="max-width: 640px; max-height: 640px;" />
    </div>

    <div>
      {!! $blogPost->content !!}
    </div>
  </div>
@endsection
