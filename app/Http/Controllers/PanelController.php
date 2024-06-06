<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Models\Visita;

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
}
