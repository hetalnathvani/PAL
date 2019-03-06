<?php
/**
 * Project
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Project'], function () {
    	Route::post('projects/get', 'ProjectsTableController')->name('projects.get');
        Route::resource('projects', 'ProjectsController');
        //Route::get('projects/{id}/edit', 'ProjectsController@edit');
        //For Datatable
        
    });
    
});