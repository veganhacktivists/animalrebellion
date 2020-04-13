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
        factory(Event::class, 2)->state('meeting')->create();
        factory(Event::class, 2)->state('training')->create();
        factory(Event::class, 2)->state('talk')->create();
    }
}
