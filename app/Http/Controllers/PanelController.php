<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Models\Visita;
use App\Models\Contacto;
use App\Models\Order;

class PanelController extends Controller
{
    public function panel(Request $request){
        if (Auth::user()->role!=1){
            return redirect()->back();
        }else{
            return view("portfolio.panel");
        }
    }

    public function todasvisitas() {
        $hoy = Carbon::today();
        $visitas = Visita::where('dia_visita', '>=', $hoy)->join('users', 'users.id', '=', 'visitas.idUsuario')->get(['visitas.*', 'users.name']);

        $agrupadas = $visitas->groupBy(function($visita) {
            return Carbon::parse($visita->dia_visita)->format('Y-m-d');
        })->map(function($group) {
            return $group->groupBy(function($visita) {
                return $visita->horario; // Agrupar por horario dentro de cada fecha
            });
        });
        $agrupadas = $agrupadas->sortKeys()->map(function($group) {
            return $group->sortKeys();
        });

        return view('portfolio.panelvisitas',['agrupadas' => $agrupadas]);
    }

    public function panelcontacto(){
        if (Auth::check() && Auth::user()->role == 1) {
            $contactos = Contacto::where('status', 0)
                ->orderByRaw("STR_TO_DATE(created_at, '%Y-%m-%d') DESC")
                ->get();
    
            return view('portfolio.panelcontacto', ['contactos' => $contactos]);
        } else {
            return redirect()->back()->with("deny", "Debes iniciar sesión como trabajador para ver los mensajes");
        }
    }

    public function nuevos_pedidos()
    {
        if (Auth::check() && Auth::user()->role == 1) {
        $pedidos = Order::where('status', 0)->orderByRaw("STR_TO_DATE(created_at, '%Y-%m-%d') DESC")->get();
        return view('portfolio.nuevos_pedidos', ['pedidos'=>$pedidos]);
    } else {
        return redirect()->back()->with("deny", "Debes iniciar sesión como trabajador para gestionar los pedidos");
    }
}
    public function devoluciones_pedidos()
    {
        if (Auth::check() && Auth::user()->role == 1) {
        $pedidos = Order::where('status', 4)->orderByRaw("STR_TO_DATE(created_at, '%Y-%m-%d') DESC")->get();
        return view('portfolio.devoluciones', ['pedidos'=>$pedidos]);
    } else {
        return redirect()->back()->with("deny", "Debes iniciar sesión como trabajador para gestionar los pedidos");
    }
}
    
}
