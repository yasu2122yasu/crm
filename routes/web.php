<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\InertiaTestController;

Route::get(
    '/inertia-test',
    function () {
        return Inertia::render('InertiaTest');
    }
);

Route::get(
    '/component-test',
    function () {
        return Inertia::render('ComponentTest');
    }
);


Route::get('/inertia/index', [InertiaTestController::class, 'index'])->name('inertia.index');
Route::get('/inertia/create', [InertiaTestController::class, 'create'])->name('inertia.create');
Route::post('/inertia', [InertiaTestController::class, 'store'])->name('inertia.store');
Route::get('/inertia/show/{id}', [InertiaTestController::class, 'show'])->name('inertia.show');
Route::delete('/inertia/{id}', [InertiaTestController::class, 'delete'])->name('inertia.delete');



//第1引数はコンポーネントの名前
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
