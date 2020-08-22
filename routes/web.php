<?php

Route::get('/', function() {
	return redirect('/medicos');
});

Route::resource('/medicos', 'MedController');

