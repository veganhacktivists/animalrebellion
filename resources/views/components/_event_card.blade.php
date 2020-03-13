<div class="col-md-4 mb-3">
  <div class="block-shadow mb-3">
    <div class="card border-0 mb-3">
      <img src="{{ $event->image }}" class="card-img-top" alt="An awesome event!">
      <div class="card-body">
        <h3 class="card-title text-dark">{{ $event->name }}</h5>
          <p class="card-text">{{ $event->description }}</p>

          <div class="d-flex flex-row justify-content-between mb-3">
            <span><i class="far fa-calendar pr-1"></i>{{ $event->start_date }} / {{ $event->end_date }}</span>
            <span><i class="fa fa-map-marker-alt pr-1"></i>{{ $event->city }}</span>
          </div>

          <a href="{{url('/events/' . $event->slug)}}" class="btn btn-success px-5">Find out more</a>
      </div>
    </div>
  </div>
</div>
