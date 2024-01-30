<?php

use App\Http\Controllers\MyControler;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;

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
Route::get('/project/{project}/download', [ProjectController::class, 'download'])
    ->name('project.download');
Route::get('/project/download_all', [ProjectController::class, 'downloadAll'])
    ->name('project.download_all');
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

require __DIR__ . '/auth.php';

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');
//Route::get('/projects/add', [ ProjectController::class, 'add' ])->name('project.add');
Route::get('/project', [ProjectController::class, 'index'])->name('project');


Route::get('/project/{project}', [ProjectController::class, 'show'])->name('project.show');
Route::prefix('/dashboard')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get(
            '/',
            function () {
                return view('dashboard');
            }
        )->name('dashboard');

        Route::resources(
            [
                'projects' => MyControler::class,
            ]
        );
    });

