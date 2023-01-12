<?php

use App\Http\Livewire\Sys\Catalogos;
use App\Http\Livewire\Sys\Permisos;
use App\Http\Livewire\Sys\Usuarios;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group([
    'prefix' => 'sys',
    'middleware'=>[
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ]
], function(){
    Route::get('catalogos', Catalogos::class)->name('sys.catalogos');
    Route::get('usuarios', Usuarios::class)->name('sys.usuarios');
    Route::get('permisos', Permisos::class)->name('sys.permisos');
    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->name('sys.logs');
});
