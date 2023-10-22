<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as HomeController;
use App\Http\Controllers\CreateController as CreateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//home page link
Route::get('/', [HomeController::class, 'home'])->name("homePage");
//create page link
Route::get('/create', [CreateController::class, 'create'])->name("createPage");