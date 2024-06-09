<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Order;
use Cart;
class HistorialController extends Controller
{
    public function historial()
    {
        $pedidos = Order::where('idUsuario', Auth::user()->id)->orderByRaw("STR_TO_DATE(created_at, '%Y-%m-%d') DESC")->get();
        return view('portfolio.historial', compact('pedidos'));

    }


    public function cancelar(Request $request)
    {
        if (Auth::check() && $request->id != null) {
            $pedido = Order::find($request->id);
        $pedido->status = 3;
        $pedido->save();
            return redirect()->back()->with("success", "Se ha cancelado el pedido");
        } else {
            return redirect()->back()->with("deny", "Debes iniciar sesión como trabajador para gestionar los pedidos");
        }
    }

    public function devolver(Request $request){
        if (Auth::check() && $request->id != null) {
            $pedido = Order::find($request->id);
        $pedido->status = 4;
        $pedido->save();
        return redirect()->back()->with("success", "Se ha comenzado la devolucion del pedido");
    } else {
        return redirect()->back()->with("deny", "Debes iniciar sesión como trabajador para gestionar los pedidos");
    }
    }

    public function confirmar_devolucion(Request $request){
        if (Auth::check() && Auth::user()->role==1 && $request->id != null) {
            $pedido = Order::find($request->id);
        $pedido->status = 4;
        $pedido->save();
        return redirect()->back()->with("success", "Se ha confirmado la devolucion del pedido");
    } else {
        return redirect()->back()->with("deny", "Debes iniciar sesión como trabajador para gestionar los pedidos");
    }
    }

    public function poner_en_reparto(Request $request){
        if (Auth::check() && Auth::user()->role==1 && $request->id != null) {
            $pedido = Order::find( $request->id);
        $pedido->status = 1;
        $pedido->save();
        return redirect()->back()->with("success", "Se ha puesto en reparto");
    } else {
        return redirect()->back()->with("deny", "Debes iniciar sesión como trabajador para gestionar los pedidos");
    }
    }
}