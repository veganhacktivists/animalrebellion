<div class="col-md-4 mb-3">
  <div class="block-shadow mb-3">
    <div class="card border-0 mb-3">
      <div class="ribbon-holder">
        <div class="ribbon ribbon-holder">
          {{ucwords($event->type)}}
        </div>
        <img src="{{ $event->image }}" class="card-img-top" alt="An awesome event!">
      </div>
      <div class="card-body">
        <h3 class="card-title text-dark">{{ $event->name }}</h5>
          <p class="card-text">{{ $event->short_description }}</p>

          <div class="mb-3">
            <span><i class="far fa-calendar pr-1"></i>{{ Carbon\Carbon::parse($event->start_date)->format('d M, Y') }} / {{ Carbon\Carbon::parse($event->end_date)->format('d M, Y') }}</span>
            <br/>
            <span><i class="fa fa-map-marker-alt pr-1 mt-2"></i>{{ $event->city }}</span>
          </div>
          <a href="{{url('/events/' . $event->slug)}}" class="btn btn-primary px-5">Find out more</a>
      </div>
    </div>
  </div>
</div>
