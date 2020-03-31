<?php

namespace App\Http\Controllers\Admin;

use App\Models\BackpackUser;
use Backpack\CRUD\CrudPanel;
use Backpack\PermissionManager\app\Http\Controllers\UserCrudController as BackpackUserCrudController;

/**
 * Class UserCrudController.
 *
 * @property CrudPanel $crud
 */
class UserCrudController extends BackpackUserCrudController
{
    public function setup()
    {
        abort_if(!backpack_user()->hasRole(BackpackUser::ROLE_ADMIN), 403);

        parent::setup();
    }
}
