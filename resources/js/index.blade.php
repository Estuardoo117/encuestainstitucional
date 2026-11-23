<!DOCTYPE html>
<html lang="es">
<head>
    {{-- CONFIGURACION BASICA DE LA PAGINA --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuesta de Satisfaccion|CECyTE</title>
    {{-- enlace de bootstrap --}}
    <Link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /*UNICAMENTE ESTILOS PERZONALIZADOS La mayor parte del diseño se realiza con bootstrap*/
        body {
            background-color: #f4f7fb;
        }
        /*fondo perzonalizado de la seccion principal*/
        .hero {
            background: linear-gradient(135deg, #0b1f3a, #123f6d);
        }
        /* Color perzonalizado del boton*/
        .btn-encuesta {
            background-color: #0d6efd;
            border-color: #0d6efd;
            color: white;
        }

        .btn-encuesta:hover{
            background-color: #0956c7;
            border-color: #0956c7;
            color: white;
        }
        /*color del numero de cada pregunta*/
        .numero-pregunta {
            background-color: #eaf2ff;
            color: #0d6efd;
            width: 40px;
            height: 40px;
        }
        </style>
</head>
<body>
{{-- BARRA DE NAVEGACION --}}
<nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container">

        {{-- Nombre de la aplicacion --}}
        <a href="{{ url('/') }}" class="navbar-brand fw-bold text-primary">

            CECyTE

        </a>

        {{-- Boton para dispositivos moviles --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- opciones del menu --}}
        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                {{-- Enlace de inicio --}}
                <li class="nav-item">

                 <a href="{{ url('/') }}" clas="nav-link">
                    
                    inicio

                  
                 </a>
                </li>
                {{-- 
                @guest muestra el enlace solamente cuando el usuario no ha iniciado sesion.
                --}}   

                @guest

                <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link">

                        Iniciar sesion

                    </a>
                </li>

                @endguest

            </ul>
        </div>
    </nav>
    {{-- SECCION PRINCIPAL --}}

    <SECTION class="hero text-white py-5">
        <div class="container py-5">
            <div class="row justify-content-center text-center">
                <div class="col-ig-8">

                    {{-- Etiqueta --}}
                    <span class="badge bg-linht text-primary rounded-pill px-3 mb-3">

                        partisipacion estudiantil 
                        
                    </span>

                    {{-- Titulo --}}
                    >h1 class="display-4 fw-bold">

                    Tu opinion transforma

                </h1>
                
                

    
</body>
</html>