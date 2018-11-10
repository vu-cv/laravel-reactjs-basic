<?php

require 'api.php';

Route::get('/', function () {
    return view('home');
});

// Route::resource('sinhvien', 'SinhVienController');

