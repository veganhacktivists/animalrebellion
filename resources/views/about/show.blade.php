@extends('layouts.app')

@section('title')
  {{ $aboutPage->title }}
@endsection

@section('content')
  <div class="container">
    <h1 class="h1 mb-4">{{ $aboutPage->header }}</h1>

    <p>{!!  nl2br($aboutPage->content) !!}</p>
  </div>
@endsection
