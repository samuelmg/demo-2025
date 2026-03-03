<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function contacto()
    {
        return view('contacto');
    }

    public function recibeFormulario(Request $request)
    {
        // Validar datos
        $request->validate([
            'nombre' => 'required|min:5',
            'correo' => 'required|email',
            'mensaje' => ['required', 'min:10'],
        ]);

        // dd($request->all());
        // Insertar a DB
        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();

        // Redirigir a otra página
        return redirect()->back();
    }

    public function listaContactos()
    {
        $contactos = Contacto::all();
        
        return view('lista-contactos')->with(['contactos' => $contactos]);
    }
}
