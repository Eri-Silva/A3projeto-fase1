<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->JSON(['hello_url'=>'/hello'], 200, [], JSON_UNESCAPED_SLASHES);
});

Route::get('/hello', function () {
    return 'Hello, World';
});

