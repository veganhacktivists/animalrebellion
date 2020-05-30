<?php

use App\Models\TeamContact;
use Illuminate\Database\Seeder;

class TeamContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TeamContact::class, 20)->create();
    }
}
