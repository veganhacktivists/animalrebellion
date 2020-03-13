<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Events extends Component
{
    const LIMIT = 25;

    public $startDate;
    public $endDate;
    public $location;
    public $keyword;
    public $eventType;
    public $events;

    protected $listeners = ['dateChanged' => 'dateChangedEventListener'];

    public function mount()
    {
        $this->events = Event::whereDate('end_date', '>=', Carbon::now())->take(self::LIMIT)->get()->toArray();
        $this->startDate = '';
        $this->endDate = '';
        $this->location = '';
        $this->keyword = '';
        $this->eventType = '';
    }

    public function render()
    {
        return view('livewire.events', ['events' => $this->events]);
    }

    public function search()
    {
        $events = Event::whereDate('end_date', '>=', Carbon::now());

        if ($this->startDate) {
            $events = $events->whereDate('start_date', '>=', Carbon::parse($this->startDate));
        }

        if ($this->endDate) {
            $events = $events->whereDate('end_date', '<=', Carbon::parse($this->endDate));
        }

        if ($this->location) {
            $events =  $events->where('city', 'like', '%' . $this->location . '%');
        }

        if ($this->keyword) {
            $events =  $events->where('name', 'like', '%' . $this->keyword . '%');
        }

        if ($this->eventType) {
            $events =  $events->where('type', '=', $this->eventType);
        }

        $this->events = $events->orderBy('start_date')->get()->toArray();
    }

    public function dateChangedEventListener($field, $val)
    {
        $this->$field = $val;
        $this->search();
    }

    public function typeChangedEventListener($type)
    {
        $this->eventType = $type;
        $this->search();
    }

    public function today()
    {
        $this->startDate = Carbon::now()->format('Y-m-d');
        $this->endDate = Carbon::now()->format('Y-m-d');
        $this->search();
    }

    public function upcomingInDays($days)
    {
        $this->startDate = Carbon::now()->format('Y-m-d');
        $this->endDate = Carbon::now()->addDays($days)->format('Y-m-d');
        $this->search();
    }
}
