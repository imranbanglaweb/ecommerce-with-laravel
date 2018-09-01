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

// For Frontend View
// Front End Info
// Route::get('/','FrontContrtoller@index');
Route::get('/','FrontContrtoller@Homeview');

// Route::get('/', function () {});

// sitting

Route::get('/sitting/index/','SittingController@index');
Route::post('/sitting/update/{id}','SittingController@update');

// Category
// Route::resource('category','CategoryController');
// Route::get('category/{id?}','CategoryController@show');
// Route::get('/category','CategoryController@index');
// Route::get('category/create','CategoryController@create');
// Route::post('category/store','CategoryController@store');
// Route::post('category/update/{id}','CategoryController@update');

// Route::get('category/{id}','CategoryController@show');

// Route::delete('/category/item/{id}','CategoryController@destroy');
Route::get('/category/store','CategoryController@store');
Route::get('/category/edit/{id}','CategoryController@edit');
Route::put('/category/update/{id}','CategoryController@update');
Route::delete('/category/destroy/{id}','CategoryController@destroy');



// Product Category
Route::get('/categoryWiseProduct','CategoryController@CategoryWiseProduct');


// Logo
// Route::resource('logo','LogoController');
Route::get('/logo','LogoController@index');
Route::get('/logo/create','LogoController@create');
Route::post('/logo/store','LogoController@store');
Route::get('/logo/edit/{id}','LogoController@edit');
Route::put('/logo/update/{id}','LogoController@update');
Route::delete('/logo/destroy/{id}','LogoController@destroy');

// Product
Route::resource('product','ProductController');
Route::post('/product_status/{id}','ProductController@PublishedStatus');

Route::post('/unproduct_status/{id}','ProductController@UnPublishedStatus');

Route::get('/product_details/{id}','ProductController@ProductDetails');

// Menufecture
Route::resource('menufecture','MenufectureController');
Route::get('/brandWiseProduct','MenufectureController@BrandWiseProduct');

// Slider
Route::resource('slider','SliderController');
Route::post('slider/update/{id}','SliderController@update');
Route::post('/slider_status/{id}','SliderController@PublishedStatus');

Route::post('/unslider_status/{id}','SliderController@UnPublishedStatus');
// Social Profiles
// Route::resource('social','SocialController');
Route::get('/social','SocialController@index');
Route::get('social/create','SocialController@create');
Route::post('social/store','SocialController@store');
Route::post('/social/update/{id}','SocialController@update');

Route::get('/social/edit/{social_id}','SocialController@edit');

Route::delete('/social/item/{id}','SocialController@destroy');

// Page Details
// Route::get('/page/details/{id}','PageController@Page');

Route::get('/page/details/{page_slug}/',['as'=>'page.single','uses'=>'PageController@Page'])->where('page_slug', '[\w\d\-\_\+\ ]+');

Route::get('/page','PageController@index');
Route::get('/page/create','PageController@create');
Route::get('/page/edit/{id}','PageController@edit');
Route::post('/page/store','PageController@store');
Route::post('/page/update/{id}','PageController@update');
Route::delete('/page/destroy/{id}','PageController@destroy');
// Frontend

Route::get('mens','MensController@Mens');

Auth::routes();

Route::get('/dashboard','HomeController@index')->name('dashboard');





// Search Route
Route::get('/search','SearchController@SearchText');

// User Login

Route::post('/user_admin','FrontContrtoller@UserLogin');
Route::get('/user_page','FrontContrtoller@UserPage');
Route::get('/logout','FrontContrtoller@Logout');



// Cart
@include('cart.php');

// Order
@include('oder.php');