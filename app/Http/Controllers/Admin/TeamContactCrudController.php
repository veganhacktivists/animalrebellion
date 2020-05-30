<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TeamContactRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TeamContactRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\CrudPanel;

/**
 * Class TeamContactCrudController.
 *
 * @property CrudPanel $crud
 */
class TeamContactCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\TeamContact');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/teamcontact');
        $this->crud->setEntityNameStrings('teamcontact', 'team_contacts');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn('team_name');
        $this->crud->addColumn('email');

        $this->crud->addField([
            'name' => 'team_name',
            'type' => 'text',
            'label' => 'Team Name',
            'attributes' => [
                'placeholder' => 'Team name',
            ],
        ]);

        $this->crud->addField([
            'name' => 'email',
            'type' => 'email',
            'label' => 'Email',
            'attributes' => [
                'placeholder' => 'Team email contact',
            ],
        ]);

        // add asterisk for fields that are required in TeamContactRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
