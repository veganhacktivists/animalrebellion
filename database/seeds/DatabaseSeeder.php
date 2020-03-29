<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);

        // Depends on Roles
        $this->call(UsersTableSeeder::class);

        $this->call(EventsTableSeeder::class);
        $this->call(LocalGroupTableSeeder::class);
        $this->call(AboutPageSeeder::class);

        /** Order for the following seeds are important: ItemTypesTableSeeder must run
         * before ItemsTableSeeder since there is a non-nullable foreign key constraint
         * on Items with default value of 1 (id of generic Resource type) that needs to
         * exist before Items can be created.
        */
        $this->call(ItemTypesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(ItemTagsTableSeeder::class);
    }
}
