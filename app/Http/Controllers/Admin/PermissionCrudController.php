<?php

namespace App\Http\Controllers\Admin;

use App\Models\BackpackUser;
use Backpack\CRUD\CrudPanel;
use Backpack\PermissionManager\app\Http\Controllers\PermissionCrudController as BackpackPermissionCrudController;

/**
 * Class PermissionCrudController.
 *
 * @property CrudPanel $crud
 */
class PermissionCrudController extends BackpackPermissionCrudController
{
    public function setup()
    {
        abort_if(!backpack_user()->hasRole(BackpackUser::ROLE_ADMIN), 403);

        parent::setup();
    }
}
