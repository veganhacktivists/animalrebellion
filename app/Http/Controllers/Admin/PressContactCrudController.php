<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PressContactRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PressContactRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\CrudPanel;

/**
 * Class PressContactCrudController.
 *
 * @property CrudPanel $crud
 */
class PressContactCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\PressContact');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/presscontact');
        $this->crud->setEntityNameStrings('presscontact', 'press_contacts');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn('name');
        $this->crud->addColumn('mobile_number');
        $this->crud->addColumn('email');

        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => 'Name',
            'attributes' => [
                'placeholder' => 'Press contact name',
            ],
        ]);

        $this->crud->addField([
            'name' => 'mobile_number',
            'type' => 'text',
            'label' => 'Mobile',
            'attributes' => [
                'placeholder' => 'Press contact mobile number',
            ],
        ]);

        $this->crud->addField([
            'name' => 'email',
            'type' => 'email',
            'label' => 'Email',
            'attributes' => [
                'placeholder' => 'Press contact email',
            ],
        ]);

        // add asterisk for fields that are required in PressContactRequest
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
