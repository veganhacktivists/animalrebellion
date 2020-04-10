@extends('layouts.app')

@section('title')
  {{ $aboutPage->title }}
@endsection

@section('content')
  <div class="container">
    <h1 class="h1 mb-4">{{ $aboutPage->header }}</h1>

    <p>{!!  nl2br($aboutPage->content) !!}</p>

    @foreach($otherPages->chunk(3) as $pageRow)
      <div class="row justify-content-around">
        @foreach($pageRow as $otherPage)
          @include('inc.about_page_card')
        @endforeach
      </div>
    @endforeach
  </div>
@endsection
