<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home');
});

Route::get('visitas', function () {
    return view('portfolio.visitas');
});
Route::post('visitas/add', [App\Http\Controllers\VisitasController::class, 'add'])->name('add_vis');
Route::get('misvisitas', [App\Http\Controllers\VisitasController::class, 'misvisitas'])->name('misvisitas');
Route::post('misvisitas/cancelvisita', [App\Http\Controllers\VisitasController::class, 'cancelvisita'])->name('cancelvisita');

Route::get('productos', [App\Http\Controllers\FrontController::class, 'productos']);

Route::post('cart/add', [App\Http\Controllers\CartController::class, 'add'])->name('add');
Route::get('cart/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');
Route::get('cart/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('clear');
Route::post('cart/removeitem', [App\Http\Controllers\CartController::class, 'removeItem'])->name('removeitem');
Route::post('cart/removeone', [App\Http\Controllers\CartController::class, 'removeOne'])->name('removeone');
Route::get('cart/comprar', [App\Http\Controllers\OrderController::class, 'comprar'])->name('comprar');

Route::get('historial', [App\Http\Controllers\FrontController::class, 'historial']);
Route::get('contacto', [App\Http\Controllers\FrontController::class, 'contacto']);


Route::get('panel', [App\Http\Controllers\PanelController::class, 'panel'])->name('panel');
Route::get('panel/todasvisitas', [App\Http\Controllers\PanelController::class, 'todasvisitas'])->name('todasvisitas');


Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
