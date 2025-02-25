<?php

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

use Illuminate\Support\Facades\Route;
use Wave\Facades\Wave;

// Wave routes
Wave::routes();

// Override Wave dashboard
Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Course routes
Route::middleware(['auth'])->group(function () {
    Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('courses.index');
    Route::prefix('courses/{course:slug}')->group(function () {
        Route::get('/', [App\Http\Controllers\CourseController::class, 'show'])->name('courses.show');
        Route::get('/{lesson:slug}', [App\Http\Controllers\LessonController::class, 'show'])->name('courses.lessons.show');
        Route::post('/{lesson:slug}/complete', [App\Http\Controllers\LessonController::class, 'complete'])->name('courses.lessons.complete');
    });
    Route::post('/lessons/{lesson}/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
});
