@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">
    <div class="col-12 pt-5 text-center">
      <h1>Resources</h1>
    </div>
  </div>

  <div class="row">
    <div class="card-columns">
      <ul>
        @foreach($items as $item)
        @include('components._resource_modal', ['item' => $item])
        @include('components._resource_card', ['item' => $item])
        @endforeach
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="pagination-links mx-auto">
      {{ $items->links() }}
    </div>
  </div>

</div>

@endsection
