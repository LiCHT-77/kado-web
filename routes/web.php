<?php

use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SiteController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->prefix('/admin')->group(function () {
    Route::get('/news', [NewsController::class, 'index'])->name('admin.news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('admin.news.store');
    Route::get('/news/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/news/{id}', [NewsController::class, 'update'])->name('admin.news.update');
    Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('admin.news.delete');

    Route::get('/books', [BookController::class, 'index'])->name('admin.books.index');
    Route::get('/books/create', [BookController::class, 'create'])->name('admin.books.create');
    Route::post('/books', [BookController::class, 'store'])->name('admin.books.store');
    Route::get('/books/{id}', [BookController::class, 'edit'])->name('admin.books.edit');
    Route::put('/books/{id}', [BookController::class, 'update'])->name('admin.books.update');
    Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('admin.books.delete');

    Route::get('/book_categories', [BookCategoryController::class, 'index'])->name('admin.book_categories.index');
    Route::get('/book_categories/create', [BookCategoryController::class, 'create'])->name('admin.book_categories.create');
    Route::post('/book_categories', [BookCategoryController::class, 'store'])->name('admin.book_categories.store');
    Route::get('/book_categories/{id}', [BookCategoryController::class, 'edit'])->name('admin.book_categories.edit');
    Route::put('/book_categories/{id}', [BookCategoryController::class, 'update'])->name('admin.book_categories.update');
    Route::delete('/book_categories/{id}', [BookCategoryController::class, 'destroy'])->name('admin.book_categories.delete');
});

Route::get('/', [SiteController::class, 'index']);

require __DIR__.'/auth.php';
