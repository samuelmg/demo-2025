<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    <h1>Lista Contactos</h1>

    <x-alert>
        Mensaje personalizado para la alerta.
    </x-alert>

    <p>
        <a href="{{ route('contactos.create') }}">Enviar nuevo mensaje de contacto</a>
    </p>

    <ul>
        @foreach ($contactos as $contacto)
            <li>
                <a href="{{ route('contactos.show', $contacto) }}">{{ $contacto->nombre }}</a> - {{ $contacto->correo }}
            </li>
        @endforeach
    </ul>
</body>
</html>