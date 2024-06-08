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
}
