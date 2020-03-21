@extends('layouts.app')

@section('content')

<!-- Expose groups data array to javascript -->
<script>
  var groups = {!!json_encode($groups) !!};
</script>

<div class="container text-center">
  <div class="row">
    <div class="col-12 pt-5">
      <h1>Local Groups</h1>
    </div>
  </div>
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
</div>
@endsection
