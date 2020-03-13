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
    public $isLoading;
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
        $this->isLoading = false;
    }

    public function render()
    {
        return view('livewire.events', ['events' => $this->events]);
    }

    public function search()
    {
        $this->isLoading = true;

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

        $this->events = $events->get()->toArray();

        $this->isLoading = false;
    }

    public function dateChangedEventListener($field, $val)
    {
        $this->isLoading = true;
        $this->$field = $val;
        $this->search();
    }

    public function typeChangedEventListener($type)
    {
        if ($type) {
            $this->isLoading = true;
            $this->eventType = $type;
            $this->search();
        }
    }
}
