@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">
    <div class="col-12 pt-5 text-center">
      <h1>Resources</h1>
    </div>
  </div>

  @livewire('resource-search')

</div>

@endsection
