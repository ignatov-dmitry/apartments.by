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

Route::get('/', function () {
    return view('index');
});

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'Admin\AdminController@index')->name('admin');


    Route::get('/admin/add_form','Admin\ApartmentController@getAddForm')->name('addApartmentGet');
    Route::post('/admin/add_form','Admin\ApartmentController@addApartment')->middleware('can:admin-panel')->name('addApartmentPost');


    Route::get('/admin/apartments_list', 'Admin\ApartmentController@getApartments')->name('list');
    Route::get('/admin/apartment/{id}', 'Admin\ApartmentController@getApartment')->middleware('can:admin-panel')->name('getApartment');
    Route::post('/admin/remove_apartment', 'Admin\ApartmentController@deleteApartment')->middleware('can:admin-panel')->name('removeApartment');
    Route::post('/admin/update_apartment', 'Admin\ApartmentController@updateApartment')->middleware('can:admin-panel')->name('updateApartment');;
    Route::get('/attributes', 'Admin\AttributeController@getAttributesList')->middleware('can:admin-panel')->name('attributes');
    Route::post('/attributes', 'Admin\AttributeController@addAttribute')->middleware('can:admin-panel')->name('addAttribute');
    Route::get('/update_attribute/{id}', 'Admin\AttributeController@getAttribute')->middleware('can:admin-panel')->name('getAttribute');
    Route::post('/update_attribute', 'Admin\AttributeController@updateAttribute')->middleware('can:admin-panel')->name('updateAttribute');


    Route::get('/get_cities_ajax/{region_id}', 'Admin\ApartmentController@getCitiesAjax');
    Route::get('/get_regions_ajax/{country_id}', 'Admin\ApartmentController@getRegionsAjax');
    Route::get('/get_location_ajax/{apartment_id}', 'Admin\ApartmentController@getApartmentLocationAjax');


    Route::get('/admin/managers', 'Admin\UserController@getManagers')->middleware('can:admin-panel')->name('managers');
    Route::post('/admin/add_manager', 'Admin\UserController@addManager')->middleware('can:admin-panel')->name('addManager');
    Route::post('/admin/remove_manager', 'Admin\UserController@removeManager')->middleware('can:admin-panel')->name('removeManager');
    Route::get('/admin/customers', 'Admin\UserController@getCustomers')->middleware('can:admin-panel')->name('customers');
    Route::post('/admin/add_customer', 'Admin\UserController@addCustomer')->middleware('can:admin-panel')->name('addCustomer');
    Route::post('/admin/remove_customer', 'Admin\UserController@removeCustomer')->middleware('can:admin-panel')->name('removeCustomer');
    Route::get('/admin/get_user/{id}', 'Admin\UserController@getUser')->middleware('can:admin-panel')->name('getUser');
    Route::post('/admin/update_user', 'Admin\UserController@updateUser')->middleware('can:admin-panel')->name('updateUser');
    Route::post('/admin/delete_user', 'Admin\UserController@deleteUser')->middleware('can:admin-panel')->name('deleteUser');

    Route::get('/admin/charts', 'Admin\AnalyticsController@getCarts')->name('charts');
    Route::get('/json/analytics', 'Admin\AnalyticsController@getPricesHistory');

});

Route::get('/auth', function (){
    return view('auth.auth',[
        'head_text' => '??????????????????????/????????????????????????????'
    ]);
})->name('auth');





Route::get('/', 'HomeController@index')->name('home');
Route::get('/apartments', 'ApartmentController@getApartments')->name('apartments');
Route::get('/apartment/{id}', 'ApartmentController@getApartment')->name('apartment');
Route::post('/add_favorite', 'ApartmentController@addFavorite');
Route::get('/apartments/filter', 'ApartmentController@filter')->name('filter');
