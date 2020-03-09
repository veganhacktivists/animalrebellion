@extends('layouts.app')

@section('title', title(__('Home')))

@section('content')
<div class="container">
    <h1>Events</h1>
</div>
@foreach($events as $event)
<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="d-flex">
                    <div class="p-3">
                        <img class="" src="{{$event->image}}" width="300" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{$event->name}}</h4>
                        <strong>From:</strong> {{Carbon\Carbon::parse($event->start_date)->format('d.m.y')}}
                        <strong>Until:</strong> {{Carbon\Carbon::parse($event->end_date)->format('d.m.y')}}
                        <p>
                            {{Carbon\Carbon::parse($event->start_time)->format('H:i')}} -
                            {{Carbon\Carbon::parse($event->end_time)->format('H:i')}}
                        </p>
                        <p class="card-text">
                            {{$event->address}}, {{$event->city}}, {{$event->country}}
                        </p>
                        <button class="btn btn-primary float-right">View Event</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection