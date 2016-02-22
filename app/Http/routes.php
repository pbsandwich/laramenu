<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 | I used four routes to complete this project.
 | --------------------------------------------
 |      '/' - 'home' displays the main categories (welcome view)
 |      'subcat/{id} = @subcat displays the subcategories (subcat view)
 |      'item/{id} = @item displays the items
 |      'subitem/{id} = @subitem displays the items from the subcat view
 */

Route::get('/', 'DatabaseController@home');
Route::get('subcat/{id}', 'DatabaseController@subcat');
Route::get('item/{id}', 'DatabaseController@item');
Route::get('subitem/{id}', 'DatabaseController@subitem');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
