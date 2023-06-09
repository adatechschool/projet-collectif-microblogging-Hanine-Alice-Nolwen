<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/blogposts', [BlogPostController::class, 'index'])->name('blogposts');
Route::get('blogposts/{blogpost}', [BlogPostController::class, 'show'])->name('blogpost.show');;
Route::get('blogposts/create/blogpost', [BlogPostController::class, 'create'])->name('blogposts.create');
Route::post('/blogposts/create/blogpost', [BlogPostController::class, 'store'])->name('blogposts.store');
Route::get('/blogposts/{blogpost}/edit', [BlogPostController::class, 'edit'])->name('blogpost.edit'); //shows edit post form
Route::put('/blogposts/{blogpost}/edit', [BlogPostController::class, 'update'])->name('blogpost.update'); //commits edited post to the database 
Route::delete('/blogposts/{blogpost}', [BlogPostController::class, 'destroy']); //deletes post from the database





require __DIR__ . '/auth.php';
