<?php
Route::get('/manage-order','OrderController@index');

Route::get('/invoice/{id}','OrderController@Invoice');

Route::get('/pdfview/{id}','OrderController@Pdfview');