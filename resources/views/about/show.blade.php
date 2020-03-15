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
          <div class="card justify-content-center align-items-center"
               style="background:url({{$otherPage->thumbnail_url}}); background-repeat: no-repeat; background-size: cover; background-position: center; min-height:350px;min-width:350px;"
          >
            <a class="text-decoration-none font-weight-bold text-white text-lg-center"
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
