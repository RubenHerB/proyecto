<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visita;
use Auth;
use Carbon\Carbon;

class VisitasController extends Controller
{
    public function add(Request $request)
    {
        if ($request->fecha == "") {
            return redirect()->back()->with("deny", "Datos incorrectos, vuelve a introducir los datos de tu reserva");
        }
        $visita = new Visita();
        $visita->cantidad_personas = $request->cantidad;
        $visita->horario = $request->horario;
        list($mes, $dia, $año) = explode('/', $request->fecha);
        $visita->dia_visita = "$año-$mes-$dia";
        $visita->idUsuario = Auth::user()->id;
        $visita->save();
        if ($request->cantidad > 1) {
            return redirect()->back()->with("success", "Se ha agregado una visita para " . $request->cantidad . " personas");
        } else {
            return redirect()->back()->with("success", "Se ha agregado una visita para " . $request->cantidad . " persona");
        }
    }

    public function misvisitas()
    {
        $hoy = Carbon::today();
        $visitas = Visita::where('idUsuario', Auth::user()->id)->where('dia_visita', '>=', $hoy)->get();

        $agrupadas = $visitas->groupBy(function ($visita) {
            return Carbon::parse($visita->dia_visita)->format('Y-m-d');
        })->map(function ($group) {
            return $group->groupBy(function ($visita) {
                return $visita->horario; // Agrupar por horario dentro de cada fecha
            });
        });
        $agrupadas = $agrupadas->sortKeys()->map(function ($group) {
            return $group->sortKeys();
        });

        return view('portfolio.vervisitas', ['agrupadas' => $agrupadas]);
    }

    public function cancelvisita(Request $request)
    {
        $visita = Visita::find($request->id);
        $visita->status = 1;
        $visita->save();
        return redirect()->back()->with("success", "Se ha cancelado la visita");
    }
}
