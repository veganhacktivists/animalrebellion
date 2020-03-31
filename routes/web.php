<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** General site visitors should not be able to login to the publicly available site */
//Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');
Route::resource('events', 'EventsController')->only(['index', 'show']);
Route::resource('local-groups', 'LocalGroupsController')->only(['index']);
Route::view('/privacy', 'privacy_policy')->name('privacy_policy');
Route::view('/blog', 'post')->name('blog');

Route::view('/contact', 'contact.form')->name('contact.form');
Route::post('/contact', 'SendContactEmailController')->name('contact.send');

/* Commenting this out for now as users can be managed in Backpack
 * and general site visitors should not be able to login. */
// Route::middleware('auth')->group(function () {
//     Route::get('/settings', 'SettingsController@edit')->name('settings.edit');
//     Route::put('/settings', 'SettingsController@update')->name('settings.update');
//     Route::delete('/account', 'DeleteAccountController')->name('account.destroy');
// });

Route::resource('about', 'AboutPageController')->parameters([
   'about' => 'about_page',
])->only('show');
