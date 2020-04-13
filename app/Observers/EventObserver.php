<?php

namespace App\Observers;

use App\Models\Event;
use App\Traits\SlugGenerator;

class EventObserver
{
    use SlugGenerator;

    /**
     * Handle the event "created" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function created(Event $event)
    {
        $slug = $this->createSlug($event->name, $event->id, Event::class);
        $event->slug = $slug;

        $address = $event->address . ', ' . $event->city . ', ' . ', ' . $event->country;
        $results = app()->make('Geocoder')->geocode($address);
        if (count($results['results'])) {
            $event->lat = $results['results'][0]['geometry']['lat'];
            $event->lng = $results['results'][0]['geometry']['lng'];
        }

        $event->save();
    }

    /**
     * Handle the event "updating" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function updating(Event $event)
    {
        if ($event->isDirty('name')) {
            $slug = $this->createSlug($event->name, $event->id, Event::class);
            $event->slug = $slug;
        }
    }
}
