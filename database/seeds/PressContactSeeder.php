<?php

use App\Models\PressContact;
use Illuminate\Database\Seeder;

class PressContactSeeder extends Seeder
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
