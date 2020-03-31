@extends('layouts.app')

@section('title', title(__('Home')))

@section('content')
  <div class="container">
    <h1 class="mb-4">Events</h1>

    @foreach($events->chunk(3) as $eventRow)
      <div class="row">
        @foreach($eventRow as $event)
          @include('components._event_card', ['event' => $event])
        @endforeach
      </div>
    @endforeach
    <div class="container text-center">
      <a href="{{ route('events.index') }}" class="btn btn-lg btn-dark">View All Events</a>
    </div>
@endsection
