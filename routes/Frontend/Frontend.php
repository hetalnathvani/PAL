<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'FrontendController@index')->name('index');
Route::post('/get/states', 'FrontendController@getStates')->name('get.states');
Route::post('/get/cities', 'FrontendController@getCities')->name('get.cities');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        //Route::get('PHP_Technology', 'PHP_TechnologyController@index')->name('PHP_Technology');
        Route::post('/dashboard/search','FindController@search')->name('search');
        

        /*Route::get('Technology_Specific', function () {
            $users = DB::table('projects')->select('id','technology_id','project_name','project_details','file')->get();
            return view('frontend.user.Technology_Specific')->with('projects', $projects);

        });*/


        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');

        /*
         * User Profile Picture
         */
        Route::patch('profile-picture/update', 'ProfileController@updateProfilePicture')->name('profile-picture.update');
    });

     Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('/dashboard/technology-specific', 'TechnologySpecificController@index')->name('TechnologySpecific');
        Route::get('/dashboard/technology-specific/{id}', 'TechnologySpecificController@show')->name('laravel');

        Route::get('/dashboard/new-arrivals/{id}','NAProjectsController@index')->name('PageProject');
        Route::get('/dashboard/new-arrivals', 'NewArrivalsController@index')->name('NewArrivals');

        Route::get('/dashboard/technology-specific/{id}/{project_id}','PageProjectController@index')->name('PageProject');

        Route::get('Laravel', 'LaravelController@index')->name('Laravel');

        Route::get('/dashboard/technology-specific/{id}', 'LaravelController@index')->name('Laravel');
        Route::get('/dashboard/technology-specific/{id}/{project_id}/download', 'DownloadController@download')->name('PageProject2');

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');

        /*
         * User Profile Picture
         */
        Route::patch('profile-picture/update', 'ProfileController@updateProfilePicture')->name('profile-picture.update');
    });
});

/*
* Show pages
*/
Route::get('pages/{slug}', 'FrontendController@showPage')->name('pages.show');
