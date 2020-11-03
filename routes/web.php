<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;


Route::get('/', [PagesController::class, 'index']);
Route::get('/about',  [PagesController::class, 'about']);
Route::get('/services',  [PagesController::class, 'services']);

Route::resource('posts', PostsController::class);




// //Dynamic route example
// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This is user ' . $id . ' with a name of ' . $name;
// });
Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
