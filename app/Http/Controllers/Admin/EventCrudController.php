<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\EventRequest as StoreRequest;
use App\Http\Requests\EventRequest as UpdateRequest;
use App\Models\Event;
use Backpack\CRUD\CrudPanel;
use Carbon\Carbon;

/**
 * Class EventCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class EventCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Event');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/event');
        $this->crud->setEntityNameStrings('event', 'events');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
        $this->crud->addColumn('name');
        $this->crud->addColumn('start');
        $this->crud->addColumn('end');
        $this->crud->addColumn('location');
        $this->crud->addColumn('type');

        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => 'Event Name',
            'placeholder' => 'Name of the event'
        ]);

        $this->crud->addField([
            'name' => 'start',
            'label' => 'Event start',
            'type' => 'datetime_picker',
            'datetime_picker_options' => [
                'format' => 'DD-MM-YYYY HH:mm',
                'language' => 'en'
            ],
            'allows_null' => false
        ]);

        $this->crud->addField([
            'name' => 'end',
            'label' => 'Event end',
            'type' => 'datetime_picker',
            'datetime_picker_options' => [
                'format' => 'DD-MM-YYYY HH:mm',
                'language' => 'en'
            ],
            'allows_null' => false
        ]);

        $this->crud->addField([
            'name' => 'location',
            'type' => 'text',
            'label' => 'Event Location',
        ]);

        $this->crud->addField([
            'name' => 'type',
            'label' => 'Event Type',
            'type' => 'select2_from_array',
            'options' => [
                Event::TYPE_ALL => ucwords(Event::TYPE_ALL),
                Event::TYPE_ACTION => ucwords(Event::TYPE_ACTION),
                Event::TYPE_ACTIVITY => ucwords(Event::TYPE_ACTIVITY),
                Event::TYPE_EVENT => ucwords(Event::TYPE_EVENT),
                Event::TYPE_MEETING => ucwords(Event::TYPE_MEETING),
                Event::TYPE_TALK => ucwords(Event::TYPE_TALK)
            ],
            'allows_null' => false,
            'default' => 'one'
        ]);

        $this->crud->addField([
            'name' => 'hosted_by',
            'type' => 'text',
            'label' => 'Event Host',
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Event Description',
            'type' => 'summernote'
        ]);

        // add asterisk for fields that are required in EventRequest
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
