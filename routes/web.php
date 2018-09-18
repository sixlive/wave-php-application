<?php

Route::redirect('/', 'reading-logs', 302);
Route::resource('reading-logs', 'ReadingLogController');

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
