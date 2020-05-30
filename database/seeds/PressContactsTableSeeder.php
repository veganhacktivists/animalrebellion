<?php

use App\Models\PressContact;
use Illuminate\Database\Seeder;

class PressContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PressContact::class, 2)->create();
    }
}
