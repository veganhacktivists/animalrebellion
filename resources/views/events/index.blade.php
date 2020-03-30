@extends('layouts.app')

@section('title', title(__('Home')))

@section('content')
<div class="container text-center">
    <h1>Events</h1>

    <p class="text-featured">
        Rebels are organising meetings, talks, events, trainings and actions all the time and you can get involved.
        <br/><br/>
        You can narrow your search using any of the controls below.
    </p>
</div>

@livewire('event-search')

@endsection