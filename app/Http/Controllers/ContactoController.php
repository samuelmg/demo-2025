<?php

namespace App\Http\Controllers;

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

        dd($request->all());
        // Insertar a DB
        

        // Redirigir a otra página

        return 'Formulario Recibido';
    }
}
