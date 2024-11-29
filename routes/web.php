<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;

Route::get('/home', function () {
    return view('welcome');
});


//route untuk news
Route::get('news', [NewsController::class, "index"]);
