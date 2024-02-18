<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
include 'routing_auth.php';
include 'routing_project.php';

Route::get('/', function () {
    return view('welcome');
});
