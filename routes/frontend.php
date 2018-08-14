<?php
/**
 * Created by PhpStorm.
 * User: Yasir
 * Date: 14.08.2018
 * Time: 09:04
 */
Route::get('/', 'Frontend\HomeGetController@get_index');
Route::get('/anasayfa', 'Frontend\HomeGetController@get_index_yonlendir');
Route::get('/index', 'Frontend\HomeGetController@get_index_yonlendir');
Route::get('/home', 'Frontend\HomeGetController@get_index_yonlendir');
Route::get('/iletisim', 'Frontend\HomeGetController@get_iletisim');
Route::get('/hakkimizda', 'Frontend\HomeGetController@get_hakkimizda');

Route::get('/home', 'Frontend\HomeController@index')->name('home');
