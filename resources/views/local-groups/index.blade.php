@extends('layouts.app')

@section('content')

<div class="container text-center">
  <h1>Local Groups</h1>
  <div class="row">
    <div class="col-12 text-left mt-2">
      <p>Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek lentil turnip greens parsnip. Sea lettuce lettuce water chestnut eggplant winter purslane fennel azuki bean earthnut pea sierra leone bologi leek soko chicory celtuce parsley jícama salsify.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-12 text-left mt-1">
      <h2 class="text-dark pl-4">Find your local group</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-12 mt-2">
      <div id="map" class="map"></div>
    </div>
  </div>

  <ul>
    @foreach($groups as $group)
    <li>
      {{ $group->name }}
    </li>
    @endforeach
  </ul>
</div>
@endsection
