<?php

// Se importa el controlador
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
Route::get      | Consultar
Route::post     | Guardar
Route::delete   | Eliminar
Route::put      | Actualizar
*/
// Se nombra la ruta para mayor facilidad de mantenimiento
// Se reemplaza la funcion anonima por el controlador  y el return
// se recibe desde la funcion del controlador
/* 
Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');
*/

// Otra forma de representar las rutas 
Route::controller(PageController::class)->group(function (){

    Route::get('/', 'home')->name('home');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('blog/{slug}',  'post')->name('post');

});