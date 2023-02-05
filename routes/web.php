<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use Illuminate\Foundation\Application;

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

/* Route::redirect('/', '/login'); */
Route::get('/', function () {
    return Inertia::render('Content', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'articles' => Article::all(),
    ]);
})->name('dashboard');

/* Route::resource('usuario', UsuarioController::class)
->only(['index','store','update','create','edit','destroy'])
->middleware(['auth']); */

/* Route::get('/mis-solicitudes', [SolicitudController::class,'indexAlumno'])->name('alumno.solicitudes')
->middleware(['auth']); */

Route::resource('article', ArticleController::class)
->only(['store','update','create','edit','destroy'])
->middleware(['auth']);

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
