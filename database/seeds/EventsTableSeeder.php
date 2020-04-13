<?php

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Event::class, 2)->state(Event::TYPE_MEETING)->create();
        factory(Event::class, 2)->state(Event::TYPE_TRAINING)->create();
        factory(Event::class, 2)->state(Event::TYPE_TALK)->create();
    }
}
