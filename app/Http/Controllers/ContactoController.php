<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function contacto()
    {
        return view('contacto');
    }

    public function recibeFormulario()
    {
        // Respuesta temporal que prueba que se recibe el formulario

        // Validar datos

        // Insertar a DB

        // Redirigir a otra página

        return 'Formulario Recibido';
    }
}
