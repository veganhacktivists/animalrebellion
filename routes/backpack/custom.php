<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\ Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('aboutpage', 'AboutPageCrudController');
    CRUD::resource('event', 'EventCrudController');
    CRUD::resource('localgroup', 'LocalGroupCrudController');
    CRUD::resource('item', 'ItemCrudController');
    CRUD::resource('item_type', 'ItemTypeCrudController');
    CRUD::resource('item_tag', 'ItemTagCrudController');
    CRUD::resource('blogpost', 'BlogPostCrudController');
    CRUD::resource('presscontact', 'PressContactCrudController');
}); // this should be the absolute last line of this file
