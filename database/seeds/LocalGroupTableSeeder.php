<?php

use App\Models\LocalGroup;
use Illuminate\Database\Seeder;

class LocalGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //** Use factory method to seed database */
        factory(App\Models\LocalGroup::class, 30)->create();

        //** manual database seeds; prefer factory method */
        // LocalGroup::create([
        //     'name' => 'Empire State Group',
        //     'address1' => '20 W 34th Street',
        //     'city' => 'New York',
        //     'state_or_province' => 'NY',
        //     'country' => 'United States of America',
        //     'postal_code' => '10001',
        // ]);

        // LocalGroup::create([
        //     'name' => 'The White House Group',
        //     'address1' => '1600 Pennsylvania Ave NW',
        //     'city' => 'Washington',
        //     'state_or_province' => 'DC',
        //     'country' => 'United States of America',
        //     'postal_code' => '20500',
        // ]);

        // LocalGroup::create([
        //     'name' => 'La Tour Eiffel Group',
        //     'address1' => 'Champs de Mars',
        //     'address2' => '5 Avenue Anatole France',
        //     'city' => 'Paris',
        //     'country' => 'France',
        //     'postal_code' => '75007',
        // ]);
    }
}
