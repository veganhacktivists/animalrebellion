@extends('layouts.app')

@section('title', title(__('Home')))

@section('content')
<div class="container">
  <h2 class="h1 mb-4">Events</h2>

  <div class="row">
    @foreach ($events as $event)
    <div class="col-md mb-3">
      <div class="block-shadow mb-3">
        <div class="card border-0 mb-3">
          <img src="{{$event->image}}" class="card-img-top" alt="{{$event->name}}">
          <div class="card-body">
            <h3 class="card-title text-dark">{{$event->name}}t</h5>
              <p class="card-text">{{ substr($event->description, 0, 200) }}...</p>

              <div class="d-flex flex-row justify-content-between mb-3">
                <span>
                  <i class="far fa-calendar pr-1"></i>
                  {{ Carbon\Carbon::parse($event->start_date)->format('d M') }} /
                  {{ Carbon\Carbon::parse($event->end_date)->format('d M') }}
                </span>
                <span><i class="fa fa-map-marker-alt pr-1"></i>{{ ucwords($event->city) }}</span>
              </div>

              <a href="#" class="btn btn-success px-5">Find out more</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @endsection