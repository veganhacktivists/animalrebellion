<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //** Use factory method to seed database */
        factory(App\Models\Item::class, 30)->create();
    }
}
