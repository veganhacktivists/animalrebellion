@extends('layouts.app')

@section('title')
  {{ $aboutPage->title }}
@endsection

@section('content')
  <h3>{{ $aboutPage->header }}</h3>

  <p>{!!  nl2br($aboutPage->content) !!}</p>
@endsection
