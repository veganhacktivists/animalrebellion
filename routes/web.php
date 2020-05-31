<?php

use Illuminate\Support\Facades\Route;

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

/* General site visitors should not be able to login to the publicly available site */
//Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');
Route::resource('events', 'EventsController')->only(['index', 'show']);
Route::resource('local-groups', 'LocalGroupsController')->only(['index']);
Route::resource('resources', 'ResourcesController')->only(['index']);
Route::resource('contact', 'ContactController')->only(['index']);
Route::view('/privacy', 'privacy_policy')->name('privacy_policy');
Route::view('/donate', 'donate')->name('donate');

// Route::view('/contact', 'contact.form')->name('contact.form');
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

Route::resource('blog', 'BlogPostController')->parameters([
    'blog' => 'blog_post',
])->only('index', 'show');

Route::resource('join', 'JoinPageController')->parameters([
    'join' => 'join_page',
])->only('show');

Route::post('/join-responses', 'JoinResponseController@store')->name('join-response');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    CRUD::resource('elfinder', 'Admin\ElfinderController');
});
