<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JoinResponseRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\JoinResponseRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\CrudPanel;

/**
 * Class JoinResponseCrudController.
 *
 * @property CrudPanel $crud
 */
class JoinResponseCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\JoinResponse');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/joinresponse');
        $this->crud->setEntityNameStrings('joinresponse', 'join_responses');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn([
            'label' => 'Page',
            'type' => 'text',
            'name' => 'joinPageName', // the column that contains the ID of that connected entity
            'entity' => 'joinPage', // the method that defines the relationship in your Model,
            'attribute' => 'title',
            'model' => "App\Models\JoinPage",
        ]);

        $this->crud->addColumn([
           'label' => 'Response',
           'type' => 'json',
            'name' => 'response',
        ]);

        // add asterisk for fields that are required in JoinResponseRequest
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
