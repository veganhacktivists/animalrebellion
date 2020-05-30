<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FaqRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\FaqRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\CrudPanel;

/**
 * Class FaqCrudController.
 *
 * @property CrudPanel $crud
 */
class FaqCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Faq');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/faq');
        $this->crud->setEntityNameStrings('faq', 'faqs');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn('question');
        $this->crud->addColumn('answer');

        $this->crud->addField([
            'name' => 'question',
            'type' => 'text',
            'label' => 'Question',
            'attributes' => [
                'placeholder' => 'Frequently asked question',
            ],
        ]);

        $this->crud->addField([
            'name' => 'answer',
            'type' => 'text',
            'label' => 'Answer',
            'attributes' => [
                'placeholder' => 'Answer',
            ],
        ]);

        // add asterisk for fields that are required in FaqRequest
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
