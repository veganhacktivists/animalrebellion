<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AboutPageRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\AboutPageRequest as UpdateRequest;
use App\Models\BackpackUser;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\CrudPanel;
use Illuminate\Support\Facades\Auth;

/**
 * Class AboutPageCrudController.
 *
 * @property CrudPanel $crud
 */
class AboutPageCrudController extends CrudController
{
    private $user;

    public function setup()
    {
        $this->user = Auth::user();

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
        $this->crud->addColumn(['name' => 'published', 'label' => 'Publicly visible', 'type' => 'boolean']);

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
        $this->crud->addField([
            'name' => 'published',
            'type' => 'checkbox',
            'label' => 'Make this page visible to the public?',
        ]);

        $this->manageButtons();

        // add asterisk for fields that are required in AboutPageRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    // Manage default buttons by setting access
    private function manageButtons()
    {
        if (!$this->user->hasPermissionTo(BackpackUser::PERMISSION_ABOUT_PAGES_CREATE)) {
            $this->crud->denyAccess('create');
        }

        if ($this->user->hasPermissionTo(BackpackUser::PERMISSION_ABOUT_PAGES_ADMIN_VIEW)) {
            $this->crud->allowAccess('show');
        }

        if (!$this->user->hasPermissionTo(BackpackUser::PERMISSION_ABOUT_PAGES_EDIT)) {
            $this->crud->denyAccess('update');
        }

        if (!$this->user->hasPermissionTo(BackpackUser::PERMISSION_ABOUT_PAGES_DELETE)) {
            $this->crud->denyAccess('delete');
        }
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
