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

Route::get('/', [
    'uses' => 'FrontEndController@index',
    'as' => 'index'
]);

Auth::routes();

Route::get('/admin/users', [
    'uses' => 'UsersController@index',
    'as' => 'user.index'
]);
Route::get('/admin/users/create', [
    'uses' => 'UsersController@create',
    'as' => 'user.create'
]);
Route::post('/admin/users/store', [
    'uses' => 'UsersController@store',
    'as' => 'user.store'
]);
Route::get('/admin/users/delete/{id}', [
    'uses' => 'UsersController@destroy',
    'as' => 'user.delete'
]);
Route::get('/admin/setting', [
    'uses' => 'SettingsController@setting',
    'as' => 'setting'
]);
Route::post('/admin/setting/update/{id}', [
    'uses' => 'SettingsController@update',
    'as' => 'setting.update'
]);
Route::get('/profile/{id}', [
    'uses' => 'UsersController@profile',
    'as' => 'user.profile'
]);
Route::post('/profile/update/{id}', [
    'uses' => 'UsersController@update',
    'as' => 'user.update'
]);

Route::get('email', function() {
    $data = [
        'title' => 'Hi',
        'content' => 'This is a test content from my laravel apps',
    ];

    Mail::send('emails.test', $data, function($message) {
        $message->to('s6134117@student.ubaya.ac.id', 'Avin')->subject('Hi bro!');
    });
});

Route::get('/admin', 'HomeController@index')->name('home');

Route::post('contact/admin', [
    'uses' => 'ContactsController@contactAdmin',
    'as' => 'contact.admin'
]);

use App\Profile;
use Illuminate\Support\Facades\Auth;;
Route::get('/create/profile', function () {
    Profile::create([
        'user_id' => Auth::user()->id
    ]);
})->name('create.profile');