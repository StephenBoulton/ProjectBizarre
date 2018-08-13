<?php

// ===============================================
// STATIC PAGES ==================================
// ===============================================

// show a static view for your home page
Route::resource('/', 'HomeController');

// page showing list of available projects
Route::resource('/projects', 'ProjectsController');

// page showing previous examples of projects
Route::resource('/examples', 'ExamplesController');

// page showing user what a dissertation entails
Route::resource('/information', 'InformationController');

Route::resource('/dashboard', 'DashboardController');
Route::auth();

Route::get('/home', 'HomeController@index');
