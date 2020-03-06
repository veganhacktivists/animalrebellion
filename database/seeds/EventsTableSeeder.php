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
        Event::create([
            'name' => 'Lorem ipsum dolor sit amet',
            'start_date' => Carbon::now()->format('Y-m-d'),
            'end_date' => (Carbon::now())->addDay()->format('Y-m-d'),
            'start_time' => Carbon::now()->format('H:i:s'),
            'end_time' => (Carbon::now())->addDay()->format('H:i:s'),
            'address' => 'Event Address',
            'city' => 'London',
            'country' => 'United Kingdom',
            'type' => Event::TYPE_ACTIVITY,
            'hosted_by' => 'Event Host',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image' => 'https://animalrebellion.org/wp-content/uploads/2020/02/Animal-Logo-No-Background-1-1536x855.png'
        ]);

        Event::create([
            'name' => 'Lorem ipsum dolor sit amet',
            'start_date' => Carbon::now()->format('Y-m-d'),
            'end_date' => (Carbon::now())->addDays(2)->format('Y-m-d'),
            'start_time' => Carbon::now()->format('H:i:s'),
            'end_time' => (Carbon::now())->addDay()->format('H:i:s'),
            'address' => 'Event Address',
            'city' => 'London',
            'country' => 'United Kingdom',
            'type' => Event::TYPE_MEETING,
            'hosted_by' => 'Event Host',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image' => 'https://animalrebellion.org/wp-content/uploads/2020/02/Animal-Logo-No-Background-1-1536x855.png'
        ]);

        Event::create([
            'name' => 'Lorem ipsum dolor sit amet',
            'start_date' => Carbon::now()->subDays(2)->format('Y-m-d'),
            'end_date' => (Carbon::now())->format('Y-m-d'),
            'start_time' => Carbon::now()->format('H:i:s'),
            'end_time' => (Carbon::now())->addDay()->format('H:i:s'),
            'address' => 'Event Address',
            'city' => 'London',
            'country' => 'United Kingdom',
            'type' => Event::TYPE_TALK,
            'hosted_by' => 'Event Host',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image' => 'https://animalrebellion.org/wp-content/uploads/2020/02/Animal-Logo-No-Background-1-1536x855.png'
        ]);
    }
}
