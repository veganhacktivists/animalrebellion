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
        $this->call(ItemsTableSeeder::class);
        $this->call(ItemTypesTableSeeder::class);
    }
}
