<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PageFormInputRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PageFormInputRequest as UpdateRequest;
use App\Models\PageFormInput;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\CrudPanel;

/**
 * Class PageFormInputCrudController.
 *
 * @property CrudPanel $crud
 */
class PageFormInputCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\PageFormInput');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/pageforminput');
        $this->crud->setEntityNameStrings('pageforminput', 'page_form_inputs');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn('name');
        $this->crud->addColumn('type');
        $this->crud->addColumn(['name' => 'required', 'label' => 'Required', 'type' => 'boolean']);

        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => 'Field name',
            'attributes' => [
                'placeholder' => 'Form field name',
            ],
        ]);

        $this->crud->addField([
            'name' => 'type',
            'type' => 'select2_from_array',
            'label' => 'Field type',
            'options' => [
                PageFormInput::TYPE_TEXT => PageFormInput::TYPE_TEXT,
                PageFormInput::TYPE_EMAIL => PageFormInput::TYPE_EMAIL,
                PageFormInput::TYPE_PHONE => PageFormInput::TYPE_PHONE,
                PageFormInput::TYPE_CHECKBOX => PageFormInput::TYPE_CHECKBOX,
                PageFormInput::TYPE_RADIO_BUTTON => PageFormInput::TYPE_RADIO_BUTTON,
            ],
        ]);

        $this->crud->addField([
            'name' => 'required',
            'type' => 'checkbox',
            'label' => 'Is this field required in forms that use it?',
        ]);

        // add asterisk for fields that are required in PageFormInputRequest
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
