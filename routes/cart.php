<?php
Route::get('/ad_card/{id}','CartController@AddTocart');
Route::post('/ad-to-card_home/','CartController@AddTocartHomepage');

Route::get('/show_cart','CartController@Showcart');
Route::get('/delete-cart/{id}','CartController@DeleteCart');
Route::post('/cart_update','CartController@Update');

// customer table /Checkout
Route::get('/user-login','FrontContrtoller@login'); //user Login
Route::post('/customer-registration','CheckoutController@Checkout');
Route::get('/billing','CheckoutController@Billing');

Route::post('/update-customer','CheckoutController@SaveBilling');

Route::get('/shipping','CheckoutController@Shipping');
Route::post('/save-shipping','CheckoutController@SaveShipping');
Route::get('/payment','CheckoutController@Payment');
Route::post('/place-order','CheckoutController@PlaceOrder');

Route::get('/OrderSuccess','CheckoutController@OrderSuccess');