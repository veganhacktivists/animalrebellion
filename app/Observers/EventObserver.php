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
