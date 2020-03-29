<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ItemRequest as StoreRequest;
use App\Http\Requests\ItemRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\CrudPanel;

/**
 * Class ItemCrudController.
 *
 * @property CrudPanel $crud
 */
class ItemCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Item');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/item');
        $this->crud->setEntityNameStrings('item', 'items');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn('title');
        $this->crud->addColumn('url');
        $this->crud->addColumn('blurb');
        $this->crud->addColumn('publication_date');
        $this->crud->addColumn('source');
        $this->crud->addColumn('primary_author');
        $this->crud->addColumn('secondary_author');

        $this->crud->addField([
            'name' => 'title',
            'type' => 'text',
            'label' => 'Title',
            'attributes' => [
                'placeholder' => 'Resource title',
            ],
        ]);

        $this->crud->addField([
            'name' => 'url',
            'type' => 'text',
            'label' => 'URL',
            'attributes' => [
                'placeholder' => 'Resource URL',
            ],
        ]);

        $this->crud->addField([
            'name' => 'blurb',
            'type' => 'textarea',
            'label' => 'Blurb',
            'attributes' => [
                'placeholder' => 'Short description of resource',
            ],
        ]);

        $this->crud->addField([
            'name' => 'source',
            'type' => 'text',
            'label' => 'Source',
            'attributes' => [
                'placeholder' => 'Source of resource',
            ],
        ]);

        $this->crud->addField([
            'name' => 'primary_author',
            'type' => 'text',
            'label' => 'Primary Author',
            'attributes' => [
                'placeholder' => 'Resource Primary Author',
            ],
        ]);

        $this->crud->addField([
            'name' => 'secondary_author',
            'type' => 'text',
            'label' => 'Secondary Author',
            'attributes' => [
                'placeholder' => 'Resource Secondary Author',
            ],
        ]);

        $this->crud->addField(
            [
                'label' => 'Category',
                'type' => 'select2',
                'name' => 'item_type_id', // the db column for the foreign key
                'entity' => 'item_type', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => "App\Models\ItemType", // foreign key model
            ],
        );

        $this->crud->addField(
            [       // Select2Multiple = n-n relationship (with pivot table)
                'label' => 'Tags',
                'type' => 'select2_multiple',
                'name' => 'tags', // the method that defines the relationship in your Model
                'entity' => 'tags', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => "App\Models\ItemTag", // foreign key model
                'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
                'select_all' => true, // show Select All and Clear buttons?
            ],
        );

        // add asterisk for fields that are required in ItemRequest
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
