<?php

use App\Models\BackpackUser;
use App\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $adminRole = Role::create(['name' => BackpackUser::ROLE_ADMIN]);
        $adminPermissionIds = Permission::whereIn('name', [
            BackpackUser::PERMISSION_USERS_ADMIN_VIEW,
            BackpackUser::PERMISSION_USERS_CREATE,
            BackpackUser::PERMISSION_USERS_EDIT,
            BackpackUser::PERMISSION_USERS_DELETE,
            BackpackUser::PERMISSION_EVENTS_ADMIN_VIEW,
            BackpackUser::PERMISSION_EVENTS_CREATE,
            BackpackUser::PERMISSION_EVENTS_EDIT,
            BackpackUser::PERMISSION_EVENTS_DELETE,
            BackpackUser::PERMISSION_ABOUT_PAGES_ADMIN_VIEW,
            BackpackUser::PERMISSION_ABOUT_PAGES_CREATE,
            BackpackUser::PERMISSION_ABOUT_PAGES_EDIT,
            BackpackUser::PERMISSION_ABOUT_PAGES_DELETE,
        ])->pluck('id')->toArray();
        $adminRole->permissions()->attach($adminPermissionIds);

        $writerRole = Role::create(['name' => BackpackUser::ROLE_CONTENT_WRITER]);
        $writerPermissionIds = Permission::whereIn('name', [
            BackpackUser::PERMISSION_EVENTS_ADMIN_VIEW,
            BackpackUser::PERMISSION_EVENTS_CREATE,
            BackpackUser::PERMISSION_EVENTS_EDIT,
            BackpackUser::PERMISSION_EVENTS_DELETE,
            BackpackUser::PERMISSION_ABOUT_PAGES_ADMIN_VIEW,
            BackpackUser::PERMISSION_ABOUT_PAGES_CREATE,
            BackpackUser::PERMISSION_ABOUT_PAGES_EDIT,
            BackpackUser::PERMISSION_ABOUT_PAGES_DELETE
        ])->pluck('id')->toArray();
        $writerRole->permissions()->attach($writerPermissionIds);
    }
}
