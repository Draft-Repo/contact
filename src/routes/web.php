<?php


use Illuminate\Support\Facades\Route;


Route::group(['namespace'=> 'Itparlour\Contact\Http\Controller'], function(){

    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@store');

});
