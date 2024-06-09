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

Route::get('historial', [App\Http\Controllers\HistorialController::class, 'historial'])->name('historial');
Route::post('historial/cancelar', [App\Http\Controllers\HistorialController::class, 'cancelar'])->name('cancelar');
Route::post('historial/devolver', [App\Http\Controllers\HistorialController::class, 'devolver'])->name('devolver');


Route::get('contacto', function () {
    return view('portfolio.contacto');
})->name('contacto');
Route::post('contacto/send_contacto', [App\Http\Controllers\ContactoController::class, 'send_contacto'])->name('send_contacto');

Route::get('panel', [App\Http\Controllers\PanelController::class, 'panel'])->name('panel');
Route::get('info_devolver', function () {
    return view('portfolio.infodevolver');
})->name('info_devolver');

Route::get('panel/todasvisitas', [App\Http\Controllers\PanelController::class, 'todasvisitas'])->name('todasvisitas');
Route::get('panel/panelcontacto', [App\Http\Controllers\PanelController::class, 'panelcontacto'])->name('panelcontacto');
Route::post('panel/marcarcontacto', [App\Http\Controllers\ContactoController::class, 'marcarcontacto'])->name('marcarcontacto');
Route::get('panel/nuevos_pedidos', [App\Http\Controllers\PanelController::class, 'nuevos_pedidos'])->name('nuevos_pedidos');
Route::post('panel/nuevos_pedidos/enviar', [App\Http\Controllers\HistorialController::class, 'poner_en_reparto'])->name('enviar');
Route::get('panel/devoluciones_pedidos', [App\Http\Controllers\PanelController::class, 'devoluciones_pedidos'])->name('devoluciones_pedidos');
Route::post('panel/devoluciones_pedidos/confirmar_devolver', [App\Http\Controllers\HistorialController::class, 'confirmar_devolucion'])->name('confirmar_devolver');


Route::get('updater/update', function (\Codedge\Updater\UpdaterManager $updater) {

    // Check if new version is available
    if($updater->source()->isNewVersionAvailable()) {

        // Get the current installed version
        echo $updater->source()->getVersionInstalled();

        // Get the new version available
        $versionAvailable = $updater->source()->getVersionAvailable();

        // Create a release
        $release = $updater->source()->fetch($versionAvailable);

        // Run the update process
        $updater->source()->update($release);

    } else {
        echo "No new version available.";
    }

});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
