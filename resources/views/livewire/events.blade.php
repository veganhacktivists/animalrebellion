<div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="form-group">
                    <label for="location">From</label>
                    <div class='input-group date' id='startDatePicker'>
                        <input type='text' class="form-control" placeholder="DD/MM/YYYY" wire:model="startDate" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="form-group">
                    <label for="location">To</label>
                    <div class='input-group date' id='endDatePicker'>
                        <input type='text' class="form-control" placeholder="DD/MM/YYYY" wire:model="endDate" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="email" class="form-control" id="location" placeholder="Type location here">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="form-group">
                    <label for="keyword">Keyword</label>
                    <input type="email" class="form-control" id="keyword" placeholder="Type keyword here">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Event Type</label>
                    <select class="form-control" id="exampleFormControlSelect1">
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
        <div class="row">
            <div class="col-6 col-md-3">
                <button class="btn btn-primary btn-block">
                    Today
                </button>
            </div>
            <div class="col-6 col-md-3">
                <button class="btn btn-primary btn-block">
                    Next 7 Days
                </button>
            </div>
            <div class="col-6 col-md-3">
                <button class="btn btn-primary btn-block">
                    Next 30 Days
                </button>
            </div>
            <div class="col-6 col-md-3">
                <button class="btn btn-primary btn-block">
                    Reset
                </button>
            </div>
        </div>
    </div>

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

    <script type="text/javascript">
        $('#startDatePicker').datepicker({
            format: 'mm-dd-yyyy'
        }).on('changeDate', function(e) {
            window.livewire.emit('dateChanged');
        });

        $('#endDatePicker').datepicker({
            format: 'mm-dd-yyyy'
        }).on('changeDate', function(e) {
            window.livewire.emit('dateChanged');
        });;
    </script>
</div>