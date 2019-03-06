<?php
/**
 * Technology
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
      //Route::post('technologies/get', 'TechnologiesTableController')->name('technologies.get');
    
    Route::group( ['namespace' => 'Technology'], function () {
        Route::resource('technologies', 'TechnologiesController');
        //For Datatable
        Route::post('technologies/get', 'TechnologiesTableController')->name('technologies.get');
    });
    
});