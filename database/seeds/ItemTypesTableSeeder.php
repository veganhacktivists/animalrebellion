<?php

use App\Models\ItemType;
use Illuminate\Database\Seeder;

class ItemTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ** manual database seeds with basic categories */
        ItemType::create([
            'name' => 'Book',
        ]);

        ItemType::create([
            'name' => 'Article',
        ]);

        ItemType::create([
            'name' => 'Film',
        ]);

        ItemType::create([
            'name' => 'Press',
        ]);

        ItemType::create([
            'name' => 'Blog Post',
        ]);

        ItemType::create([
            'name' => 'Podcast',
        ]);

        ItemType::create([
            'name' => 'Graphics',
        ]);
    }
}
