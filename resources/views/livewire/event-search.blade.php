<div>
    <div class="event-filters">
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="form-group">
                    <label for="startDate">From</label>
                    <div class='input-group date' id='startDatePicker'>
                        <input type='text' class="form-control" placeholder="DD/MM/YYYY" wire:model="startDate" onkeydown="event.preventDefault()" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="form-group">
                    <label for="endDate">To</label>
                    <div class='input-group date' id='endDatePicker'>
                        <input type='text' class="form-control" placeholder="DD/MM/YYYY" wire:model="endDate" onkeydown="event.preventDefault()" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" placeholder="Type location here" wire:model="location" wire:keyup="search">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="form-group">
                    <label for="keyword">Keyword</label>
                    <input type="text" class="form-control" id="keyword" placeholder="Type keyword here" wire:model="keyword" wire:keyup="search">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="form-group">
                    <label for="eventType">Event Type</label>
                    <select class="form-control" id="eventType" wire:change="typeChangedEventListener($event.target.value)" wire:model="eventType">
                        <option value="">Select from list</option>
                        <option value="{{App\Models\Event::TYPE_ALL}}">{{ucwords(App\Models\Event::TYPE_ALL)}}</option>
                        <option value="{{App\Models\Event::TYPE_ACTION}}">{{ucwords(App\Models\Event::TYPE_ACTION)}}</option>
                        <option value="{{App\Models\Event::TYPE_ACTIVITY}}">{{ucwords(App\Models\Event::TYPE_ACTIVITY)}}</option>
                        <option value="{{App\Models\Event::TYPE_EVENT}}">{{ucwords(App\Models\Event::TYPE_EVENT)}}</option>
                        <option value="{{App\Models\Event::TYPE_MEETING}}">{{ucwords(App\Models\Event::TYPE_MEETING)}}</option>
                        <option value="{{App\Models\Event::TYPE_TALK}}">{{ucwords(App\Models\Event::TYPE_TALK)}}</option>
                        <option value="{{App\Models\Event::TYPE_TRAINING}}">{{ucwords(App\Models\Event::TYPE_TRAINING)}}</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="row mt-2">
            <div class="col-6 col-md-2 mt-2">
                <button wire:click="today" class="btn btn-primary btn-block p-2">
                    Today
                </button>
            </div>
            <div class="col-6 col-md-2 mt-2">
                <button wire:click="upcomingInDays(7)" class="btn btn-primary btn-block p-2">
                    Next 7 Days
                </button>
            </div>
            <div class="col-6 col-md-2 mt-2">
                <button wire:click="upcomingInDays(30)" class="btn btn-primary btn-block p-2">
                    Next 30 Days
                </button>
            </div>
            <div class="col-6 col-md-2 mt-2">
                <button wire:click="mount" class="btn btn-primary btn-block p-2">
                    Reset
                </button>
            </div>
            <div class="col-12 col-md-4 text-right">
                <h5 class="mt-3 event-count">{{count($events)}} {{count($events) === 1 ? 'Event' : 'Events'}}</h5>
            </div>
        </div>
    </div>

    <div class="container p-4 mt-4 mb-4 d-none" wire:loading.class="d-block">
        <div class="row">
            <div class="col-12 text-center">
                <p>Loading...</p>
            </div>
        </div>
    </div>

    @foreach($events as $event)
    <div class="container" wire:loading.class="d-none">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="d-flex">
                        <div class="ribbon-holder mt-3 mb-3">
                            <div class="ribbon ribbon-holder">
                                {{ucwords($event['type'])}}
                            </div>
                            <img class="" src="{{$event['image']}}" width="300" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{$event['name']}}</h4>
                            <strong>From:</strong> {{Carbon\Carbon::parse($event['start_date'])->format('d.m.y')}}
                            <strong>Until:</strong> {{Carbon\Carbon::parse($event['end_date'])->format('d.m.y')}}
                            <p>
                                {{Carbon\Carbon::parse($event['start_time'])->format('H:i')}} -
                                {{Carbon\Carbon::parse($event['end_time'])->format('H:i')}}
                            </p>
                            <p class="card-text">
                                {{$event['address']}}, {{$event['city']}}, {{$event['country']}}
                            </p>
                            <a href="{{url('/events/' . $event['slug'])}}" class="btn btn-sm btn-dark float-right">View Event</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @if(count($events) == 0)
    <div class="container p-4 mt-4 mb-4" wire:loading.class="d-none">
        <div class="row text-center">
            <div class="col-12">
                No events found matching your search criteria
            </div>
        </div>
    </div>
    @endif

    <script type="text/javascript">
        $('#startDatePicker').datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            orientation: 'bottom left'
        }).on('changeDate', function(e) {
            window.livewire.emit('dateChanged', 'startDate', e.format());
        });

        $('#endDatePicker').datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            orientation: 'bottom left'
        }).on('changeDate', function(e) {
            window.livewire.emit('dateChanged', 'endDate', e.format());
        });;
    </script>

</div>