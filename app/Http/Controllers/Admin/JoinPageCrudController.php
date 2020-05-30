<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JoinPageRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\JoinPageRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\CrudPanel;

/**
 * Class JoinPageCrudController.
 *
 * @property CrudPanel $crud
 */
class JoinPageCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\JoinPage');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/joinpage');
        $this->crud->setEntityNameStrings('joinpage', 'join_pages');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // Columns when browsing
        $this->crud->addColumn('title');
        $this->crud->addColumn('header');
        $this->crud->addColumn(['name' => 'published', 'label' => 'Publicly visible', 'type' => 'boolean']);

        // Fields on the edit page
        $this->crud->addField([
            'name' => 'title',
            'type' => 'text',
            'label' => 'Title',
            'attributes' => [
                'placeholder' => 'Page title',
            ],
        ]);

        $this->crud->addField([
            'name' => 'slug',
            'type' => 'text',
            'label' => 'Slug (the identifier that shows up in the page\'s URL',
            'attributes' => [
                'placeholder' => 'Page slug',
            ],
        ]);

        $this->crud->addField([
            'name' => 'header',
            'type' => 'text',
            'label' => 'Header (the bolded text users see at the top of the page',
            'attributes' => [
                'placeholder' => 'Page header',
            ],
        ]);

        $this->crud->addField([
            'name' => 'content',
            'type' => 'summernote',
            'label' => 'Content (the textual body of the page)',
            'attributes' => [
                'placeholder' => 'The textual body of the page',
            ],
        ]);

        $this->crud->addField([
            'name' => 'published',
            'type' => 'checkbox',
            'label' => 'Make this post visible to the public?',
        ]);

        $this->crud->addField(
            [       // Select2Multiple = n-n relationship (with pivot table)
                'label' => 'What data can users input?',
                'type' => 'select2_multiple',
                'name' => 'formInputs', // the method that defines the relationship in your Model
                'entity' => 'formInputs', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => "App\Models\PageFormInput", // foreign key model
                'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
                'select_all' => true, // show Select All and Clear buttons?
            ],
        );

        // add asterisk for fields that are required in JoinPageRequest
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
