@extends('layouts.app')

@section('title', title(__('Home')))

@section('content')
  <div class="container">
    <h2 class="h1 mb-4">Events</h2>

    @foreach($events->chunk(3) as $eventRow)
      <div class="row">
        @foreach($eventRow as $event)
          @include('components._event_card', ['event' => $event])
        @endforeach
      </div>
    @endforeach
@endsection
