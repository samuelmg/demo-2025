<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>

    <p>
        <a href="{{ route('contactos.index') }}">Volver a la lista de contactos</a>
    </p>

    <form action="{{ route('contactos.update', $contacto) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') ?? $contacto->nombre }}">
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" value="{{ old('correo') ?? $contacto->correo }}">
        @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror<br><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="4" cols="50">{{ old('mensaje') ?? $contacto->mensaje }}</textarea>
        @error('mensaje')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>