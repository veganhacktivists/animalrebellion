@foreach($events as $event)
<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="d-flex">
                    <div class="ribbon-holder mt-3 mb-3">
                        <div class="ribbon ribbon-holder">
                            {{ucwords($event->type)}}
                        </div>
                        <img class="" src="{{$event->image}}" width="300" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{$event->name}}</h4>
                        <strong>From:</strong> {{Carbon\Carbon::parse($event->start_date)->format('d.m.y')}}
                        <strong>Until:</strong> {{Carbon\Carbon::parse($event->end_date)->format('d.m.y')}}
                        <p>
                            {{Carbon\Carbon::parse($event->start_time)->format('H:i')}} -
                            {{Carbon\Carbon::parse($event->end_time)->format('H:i')}}
                        </p>
                        <p class="card-text">
                            {{$event->address}}, {{$event->city}}, {{$event->country}}
                        </p>
                        <button class="btn btn-primary float-right">View Event</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<div class="mt-3 d-flex flex-row justify-content-center">
    <div>
        {{$events->onEachSide(1)->links()}}
    </div>
</div>