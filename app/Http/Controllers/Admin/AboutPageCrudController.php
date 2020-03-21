<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AboutPageRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\AboutPageRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\CrudPanel;

/**
 * Class AboutPageCrudController.
 *
 * @property CrudPanel $crud
 */
class AboutPageCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\AboutPage');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/aboutpage');
        $this->crud->setEntityNameStrings('aboutpage', 'about_pages');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // Columns when browsing
        $this->crud->addColumn('title');
        $this->crud->addColumn('header');
        $this->crud->addColumn(['name' => 'content', 'type' => 'textarea', 'label' => 'Content']);

        // Fields on the edit page
        $this->crud->addField(
            [
                'name' => 'title',
                'type' => 'text',
                'label' => 'Title',
                'attributes' => [
                    'placeholder' => 'Page title',
                ],
            ]
        );
        $this->crud->addField(
            [
                'name' => 'slug',
                'type' => 'text',
                'label' => 'Slug (the identifier that shows up in the page\'s URL',
                'attributes' => [
                    'placeholder' => 'Page slug',
                ],
            ]
        );
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
           // Upload
            'name' => 'thumbnail',
            'label' => 'The thumbnail image that should show up for this page',
            'type' => 'image',
            'upload' => true,
        ]);

        // add asterisk for fields that are required in AboutPageRequest
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
