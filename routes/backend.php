<?php
/**
 * Created by PhpStorm.
 * User: Yasir
 * Date: 14.08.2018
 * Time: 09:03
 */
Route::group(['prefix'=>'yonetim'],function (){
    Route::get('/', 'Backend\AdminGetController@get_index');
    Route::get('/ayarlar', 'Backend\AdminGetController@get_ayarlar');
    Route::post('/ayarlar', 'Backend\AdminPostController@post_ayarlar');
    Route::post('/hakkimizda', 'Backend\AdminPostController@post_hakkimizda');
    Route::get('/hakkimizda', 'Backend\AdminGetController@get_hakkimizda');

});