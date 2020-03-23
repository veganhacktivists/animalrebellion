@@ -0,0 +1,65 @@
<?php

use App\Models\BackpackUser;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Users CRUD operation permissions
        Permission::create([
            'name' => BackpackUser::PERMISSION_USERS_CREATE,
            'guard_name' => 'backpack',
        ]);

        Permission::create([
            'name' => BackpackUser::PERMISSION_USERS_VIEW,
        ]);

        Permission::create([
            'name' => BackpackUser::PERMISSION_USERS_EDIT,
        ]);

        Permission::create([
            'name' => BackpackUser::PERMISSION_USERS_DELETE,
        ]);

        // Event CRUD operation permissions
        Permission::create([
            'name' => BackpackUser::PERMISSION_EVENTS_CREATE,
        ]);

        Permission::create([
            'name' => BackpackUser::PERMISSION_EVENTS_VIEW,
        ]);

        Permission::create([
            'name' => BackpackUser::PERMISSION_EVENTS_EDIT,
        ]);

        Permission::create([
            'name' => BackpackUser::PERMISSION_EVENTS_DELETE,
        ]);

        // Page CRUD operation permissions
        Permission::create([
            'name' => BackpackUser::PERMISSION_ABOUT_PAGES_CREATE,
        ]);

        Permission::create([
            'name' => BackpackUser::PERMISSION_ABOUT_PAGES_VIEW,
        ]);

        Permission::create([
            'name' => BackpackUser::PERMISSION_ABOUT_PAGES_EDIT,
        ]);

        Permission::create([
            'name' => BackpackUser::PERMISSION_ABOUT_PAGES_DELETE,
        ]);
    }
}
