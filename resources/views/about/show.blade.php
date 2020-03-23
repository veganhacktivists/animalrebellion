@extends('layouts.app')

@section('title')
  {{ $aboutPage->title }}
@endsection

@section('content')
  <div class="container">
    <h1 class="h1 mb-4">{{ $aboutPage->header }}</h1>

    <p>{!!  nl2br($aboutPage->content) !!}</p>

    @foreach($otherPages->chunk(3) as $pageRow)
      <div class="row">
        @foreach($pageRow as $otherPage)
          <div class="card justify-content-center align-items-center custom-thumbnail"
               style="background-image:url({{$otherPage->thumbnail_url}});"
          >
            <a class="font-weight-bold text-primary text-xl-center h1"
               href="{{ route('about.show', $otherPage) }}"
            >
              {{ $otherPage->title }}
            </a>
          </div>
        @endforeach
      </div>
    @endforeach
  </div>
@endsection
