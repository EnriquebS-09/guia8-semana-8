<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ITCA-FEPADE-GOD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">ITCA-FEPADE</a>
        
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
            <a class="nav-link" href="{{ route('cursos') }}">Cursos</a>
            <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('contenido')
</div>
<!--@ yield('contenido') es una directiva de Blade que sirve para reservar un espacio dentro de
una plantilla principal (layout), para que otras vistas puedan inyectar contenido en ese lugar.-->
<hr>
<br>
<div style="text-align: center">
        <h1>prueba de ejercicio practico de guia 😊😊😊<br>
        semana 8 
        </h1>

</div>
<hr>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>