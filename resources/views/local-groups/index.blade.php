@extends('layouts.app')

@section('content')
  <div class="container text-center">
    <h1>Local Groups</h1>
    <ul>
      @foreach($groups as $group)
        <li>
          {{ $group->name }}
        </li>
        @endforeach
    </ul>
  </div>
@endsection
