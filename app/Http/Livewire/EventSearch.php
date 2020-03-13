<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;

class EventSearch extends Component
{
    public $startDate;
    public $endDate;
    public $location;
    public $keyword;
    public $eventType;
    public $events;

    protected $listeners = ['dateChanged' => 'dateChangedEventListener'];

    public function mount()
    {
        $this->events = Event::whereDate('end_date', '>=', Carbon::now())
            ->orderBy('start_date', 'asc')
            ->get()
            ->toArray();

        $this->startDate = '';
        $this->endDate = '';
        $this->location = '';
        $this->keyword = '';
        $this->eventType = '';
    }

    public function render()
    {
        return view('livewire.event-search', ['events' => $this->events]);
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
            $events =  $events->whereRaw('LOWER(city) LIKE ?', ['%' . strtolower($this->location) . '%']);
        }

        if ($this->keyword) {
            $events =  $events->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($this->keyword) . '%']);
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
        $this->endDate = '';
        $this->search();
    }

    public function upcomingInDays($days)
    {
        $this->startDate = Carbon::now()->format('Y-m-d');
        $this->endDate = Carbon::now()->addDays($days)->format('Y-m-d');
        $this->search();
    }
}
