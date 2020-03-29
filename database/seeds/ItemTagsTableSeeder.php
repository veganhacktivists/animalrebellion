<?php

use App\Models\ItemTag;
use Illuminate\Database\Seeder;

class ItemTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemTag::create([
            'name' => 'Newsworthy item',
        ]);

        ItemTag::create([
            'name' => 'Vegan cooking',
        ]);

        ItemTag::create([
            'name' => 'Events',
        ]);

        ItemTag::create([
            'name' => 'Celebrity',
        ]);

        ItemTag::create([
            'name' => 'Activism',
        ]);

        ItemTag::create([
            'name' => 'Local actions',
        ]);
    }
}
