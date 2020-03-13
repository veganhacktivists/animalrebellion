@extends('layouts.app')

@section('title', title(__('Home')))

@section('content')
<div class="container">
    <h1>Events</h1>
</div>

@livewire('event-search')

@endsection