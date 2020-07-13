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

// Route::get('/', function () {
//     return view('welcome');
// });

//category
Route::get('category','CategoryController@category');
Route::post('add-category-post','CategoryController@categorypost');
Route::get('view-category','CategoryController@view_category');
Route::get('/delete-category/{cat_id}','CategoryController@delete_category');
Route::get('/edit-category/{cat_id}','CategoryController@edit_category');
Route::post('update-category-post','CategoryController@categoryupdate');

//sub category

Route::get('subcategory','SubCategoryController@sub_addcategory');
Route::post('add-subcategory-post','SubCategoryController@subcategorypost');
Route::get('view-subcategory','SubCategoryController@view_subcategory');
Route::get('/delete-subcategory/{cat_id}','SubCategoryController@delete_subcategory');
Route::get('/edit-subcategory/{cat_id}','SubCategoryController@edit_subcategory');
Route::post('update-subcategory-post','SubCategoryController@subcategoryupdate');

Route::get('/deleted-subcategory','SubCategoryController@deleted_subcategory');
Route::get('/restore-subcategory/{id}','SubCategoryController@restore_subcategory');
Route::get('/permanent-subcategory/{id}','SubCategoryController@permanent_subcategory');

//product Routes
Route::get('product','ProductController@add_product');
Route::post('add-product-post','ProductController@post_product');
Route::get('view-product','ProductController@view_product');
Route::get('delete-product/{cat_id}','ProductController@delete_product');
Route::get('edit-product/{cat_id}','ProductController@edit_product');
Route::post('update-product-post','ProductController@update_product');

// Route::get('/',function(){
//     return view('test');
//  });



// Auth::routes();
Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontendController@FrontPage')->name('FrontPage');

//singel product
Route::get('item/{slug}', 'FrontendController@single_product')->name('single_product');
