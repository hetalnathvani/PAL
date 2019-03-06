<?php
/**
 * Project
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Technology'], function () {
    	Route::post('technologies/get', 'TechnologiesTableController')->name('technologies.get');
        Route::resource('technologies', 'TechnologiesController');
        //Route::get('technologies/{{id}}/edit', 'TechnologiesController@edit');
        //For Datatable
        
    });
    
});