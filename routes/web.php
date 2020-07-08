<?php


Auth::routes();

Route::get('/', 'IndexController@index');
Route::get('/contacts', 'ContactController@index');
Route::get('/articles', 'ArticlesController@index');
Route::post('/save-contact','ContactController@saveContact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
