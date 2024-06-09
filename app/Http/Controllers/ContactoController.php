<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Auth;
use PharIo\Manifest\Email;

class ContactoController extends Controller
{
    public function send_contacto(Request $request){
        if (Auth::check()){
            $contacto=new Contacto();
            $contacto->idUsuario=Auth::user()->id;
            if($request->email!=''){
                $contacto->email= $request->email;
            }else{
                $contacto->email= Auth::user()->email;
            }
            $contacto->telefono= $request->telefono;
            $contacto->mensaje= $request->mensaje;
            $contacto->cnombre= $request->nombre;

        $contacto->save();

        return redirect()->back()->with("success", "Mensaje enviado, contactaremos contigo lo antes posible");
        }else{
            return redirect()->back()->with("deny","Debes iniciar sesion antes de enviar un mensaje");
        }
    }


    public function marcarcontacto(Request $request){
        if (Auth::check() && Auth::user()->role == 1 && $request->id!=null) {
            $contacto = Contacto::find($request->id);
            $contacto->status=1;
            $contacto->save();
            return redirect()->back()->with("success", "El estado de la solicitud se a cambiado a resuelta");
        }else{
            return redirect()->back()->with("deny", "Debes iniciar sesión como trabajador para gestionar los mensajes");
        }
    }
}
