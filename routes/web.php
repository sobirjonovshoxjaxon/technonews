<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


//PageController 
Route::get('/',[PageController::class, 'index'])->name('index.page');
Route::get('/category/{slug}',[PageController::class, 'categoryPost'])->name('category.post');
Route::get('/contact',[PageController::class, 'contact'])->name('contact.page');
Route::get('/postdetail',[PageController::class, 'postdetail'])->name('postdetail.page');

//AdminController 
Route::get('/admin/index',[AdminController::class, 'index'])->name('admin.index');




//Dashboard 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
