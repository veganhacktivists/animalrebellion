@extends('layouts.app')

@section('content')

<!-- Expose groups data array to javascript -->
<script>
  var groups = {!! json_encode($groups) !!};
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
      <!-- Map -->
      <div id="map" class="map">
        <!-- Popup -->
        <div id="popup"></div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 text-left mt-3">
      <div class="pl-4">
        <h2 class="text-dark">No Local Group Near You?</h2>
        <p>Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek lentil turnip greens parsnip. Sea lettuce lettuce water chestnut eggplant winter purslane fennel azuki bean earthnut pea sierra leone bologi leek soko chicory celtuce parsley jícama salsify.</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 text-left mt-1">
      <div class="pl-4">
        <h2 class="text-dark">1 watch the talk</h2>
        <p>Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek lentil turnip greens parsnip. Sea lettuce lettuce water chestnut eggplant winter purslane fennel azuki bean earthnut pea sierra leone bologi leek soko chicory celtuce parsley jícama salsify.</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 text-left mt-1">
      <div class="pl-4">
        <h2 class="text-dark">2 holocracy, animal liberation, civil resistance</h2>
        <p>Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek lentil turnip greens parsnip. Sea lettuce lettuce water chestnut eggplant winter purslane fennel azuki bean earthnut pea sierra leone bologi leek soko chicory celtuce parsley jícama salsify.</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 text-left mt-1">
      <div class="pl-4">
        <h2 class="text-dark">3 link to form to organise call</h2>
        <p>Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek lentil turnip greens parsnip. Sea lettuce lettuce water chestnut eggplant winter purslane fennel azuki bean earthnut pea sierra leone bologi leek soko chicory celtuce parsley jícama salsify.</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 text-left mt-1">
      <div class="pl-4">
        <h2 class="text-dark">4 we will be in contact and go through this document with you and get the local group up and running.</h2>
        <p>Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek lentil turnip greens parsnip. Sea lettuce lettuce water chestnut eggplant winter purslane fennel azuki bean earthnut pea sierra leone bologi leek soko chicory celtuce parsley jícama salsify.</p>
      </div>
    </div>
  </div>

</div>
@endsection
