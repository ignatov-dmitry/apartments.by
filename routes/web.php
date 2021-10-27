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

use App\Blog;
use App\BlogCategory;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'Admin\AdminController@index')->name('admin');


    Route::get('/admin/apartments/add_form','Admin\ApartmentController@getAddForm')
        ->name('addApartmentGet');

    Route::post('/admin/apartments/add_form','Admin\ApartmentController@addApartment')
        ->middleware('can:admin-panel')
        ->name('addApartmentPost');


    Route::get('/admin/apartments_list', 'Admin\ApartmentController@getApartments')
        ->name('list');

    Route::get('/admin/apartment/{id}', 'Admin\ApartmentController@getApartment')
        ->middleware('can:admin-panel')
        ->name('getApartment');

    Route::post('/admin/remove_apartment', 'Admin\ApartmentController@deleteApartment')
        ->middleware('can:admin-panel')
        ->name('removeApartment');

    Route::post('/admin/update_apartment', 'Admin\ApartmentController@updateApartment')
        ->middleware('can:admin-panel')
        ->name('updateApartment');

    Route::get('/attributes', 'Admin\AttributeController@getAttributesList')
        ->middleware('can:admin-panel')
        ->name('attributes');

    Route::post('/attributes', 'Admin\AttributeController@addAttribute')
        ->middleware('can:admin-panel')
        ->name('addAttribute');

    Route::get('/update_attribute/{id}', 'Admin\AttributeController@getAttribute')
        ->middleware('can:admin-panel')
        ->name('getAttribute');


    Route::post('/update_attribute', 'Admin\AttributeController@updateAttribute')
        ->middleware('can:admin-panel')
        ->name('updateAttribute');


    Route::get('/admin/managers', 'Admin\UserController@getManagers')
        ->middleware('can:admin-panel')
        ->name('managers');

    Route::post('/admin/add_manager', 'Admin\UserController@addManager')
        ->middleware('can:admin-panel')
        ->name('addManager');

    Route::post('/admin/remove_manager', 'Admin\UserController@removeManager')
        ->middleware('can:admin-panel')
        ->name('removeManager');

    Route::get('/admin/customers', 'Admin\UserController@getCustomers')
        ->middleware('can:admin-panel')
        ->name('customers');

    Route::post('/admin/add_customer', 'Admin\UserController@addCustomer')
        ->middleware('can:admin-panel')
        ->name('addCustomer');

    Route::post('/admin/remove_customer', 'Admin\UserController@removeCustomer')
        ->middleware('can:admin-panel')
        ->name('removeCustomer');

    Route::get('/admin/get_user/{id}', 'Admin\UserController@getUser')
        ->middleware('can:admin-panel')
        ->name('getUser');

    Route::post('/admin/update_user', 'Admin\UserController@updateUser')
        ->middleware('can:admin-panel')
        ->name('updateUser');

    Route::post('/admin/delete_user', 'Admin\UserController@deleteUser')
        ->middleware('can:admin-panel')
        ->name('deleteUser');



    Route::get('/admin/blog', function () {
        return view('admin.blog.index');
    })->middleware('can:manager-panel')->name('adminBlog');


    // Категории блога
    Route::get('/admin/blog/categories', 'Admin\BlogController@getBlogCategories')
        ->middleware('can:manager-panel')
        ->name('listBlogCategories');

    Route::get('/admin/blog/category/{id}', 'Admin\BlogController@getBlogCategory')
        ->middleware('can:manager-panel')
        ->name('getBlogCategory');

    Route::get('/admin/blog/categories/add', 'Admin\BlogController@addBlogCategoryForm')
        ->middleware('can:manager-panel')
        ->name('addBlogCategoryForm');

    Route::post('/admin/blog/categories/add', 'Admin\BlogController@addBlogCategory')
        ->middleware('can:manager-panel')
        ->name('addBlogCategory');

    Route::post('/admin/blog/categories/update', 'Admin\BlogController@updateBlogCategory')
        ->middleware('can:manager-panel')
        ->name('updateBlogCategory');

    Route::post('/admin/blog/categories/remove', 'Admin\BlogController@removeBlogCategory')
        ->middleware('can:manager-panel')
        ->name('removeBlogCategory');


    // Блог
    Route::get('/admin/blog/blogs', 'Admin\BlogController@getBlogPosts')
        ->middleware('can:manager-panel')
        ->name('listBlogPosts');

    Route::get('/admin/blog/post-{id}', 'Admin\BlogController@getBlogPost')
        ->middleware('can:manager-panel')
        ->name('getBlogPost');

    Route::get('/admin/blog/post/add', 'Admin\BlogController@addBlogPostForm')
        ->middleware('can:manager-panel')
        ->name('addBlogPostForm');

    Route::post('/admin/blog/post/add', 'Admin\BlogController@addBlogPost')
        ->middleware('can:manager-panel')
        ->name('addBlogPost');

    Route::post('/admin/blog/post/update', 'Admin\BlogController@updateBlogPost')
        ->middleware('can:manager-panel')
        ->name('updateBlogPost');

    Route::post('/admin/blog/post/remove', 'Admin\BlogController@removeBlogPost')
        ->middleware('can:manager-panel')
        ->name('removeBlogPost');


    Route::post('ajax/uploader/category', function (Request $request) {
        return response()->json([
            'url' => (new BlogCategory())->imageSave($request, 'file')
        ]);
    });

    Route::post('ajax/uploader/blog', function (Request $request) {
        return response()->json([
            'url' => (new Blog())->imageSave($request, 'file')
        ]);
    });


    Route::get('/admin/charts', 'Admin\AnalyticsController@getCarts')->name('charts');
    Route::get('/json/analytics', 'Admin\AnalyticsController@getPricesHistory');
});

Route::get('/auth', function (){
    return view('auth.auth',[
        'head_text' => 'Авторизация/Аутентификация'
    ]);
})->name('auth');





Route::get('/', 'HomeController@index')->name('home');
Route::get('/apartments', 'ApartmentController@getApartments')->name('apartments');
Route::get('/apartment/{id}', 'ApartmentController@getApartment')->name('apartment');


Route::get('/blog/category/{categoryId}', 'BlogController@getBlogPostsFromCategory')->name('getBlogPostsFromCategory');


Route::post('/add_favorite', 'ApartmentController@addFavorite');


Route::get('/get_cities_ajax/{region_id}', 'ApartmentController@getCitiesAjax');
Route::get('/get_regions_ajax/{country_id}', 'ApartmentController@getRegionsAjax');
Route::get('/get_location_ajax/{apartment_id}', 'ApartmentController@getApartmentLocationAjax');