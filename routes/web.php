<?php

Route::get('/', function() {
	return redirect('/medicos');
});

Route::resource('/medicos', 'MedController');

Route::any('/search', 'MedController@search')->name('search');

