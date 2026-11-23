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
                
                {{-- Descripcion --}}
                <p class = "lead text-white-50 mt - 3">

                    Ayudanos a conocer tu experiencia dentro de nuestra
                    institucion. Tus respuestas nos permitiran identificar
                    areas de oportunidad y continuar mejorando la calidad
                    educativa y los servicios del CECyTE.

                </p>
            </div>
        </div>
    </div>
</section>
               
{{-- CONTENEDOR PRINCIPAL DE LA ENCUESTAA--}}
 <main class= "container">
    <div class= "row justify-content-center">
        <div class= "col-12 col-lg-9>"

    

        {{--
        
        La clase "mt-n5" permite colocar la tarjeta 
        sobre la seccion anterior
        
        --}}


     <div class="card border-0 rounded-4 shadow-ig mt-n5 mb-5">

    {{--  ENCABEZADO DE LA ENCUESTA --}}
     
    <div class="card-body p-4 p-md-5">
        <h2 class="fw-bold mb-2">
            Encuesta de Satisfaccion
        </h2>

        <p class="text-secondary mb-4">
            selecciona la respuesta que mejor represente tu opinion.
        </p>
    
    
 {{-- FORMULARIO --}}
 <form action="{{route('encuesta.store') }}" method="POST">
{{-- Proteccion CSRF de Laravel --}}
@CSRF

{{-- PREGUTA 1 --}}

<div class="py-4 border-bottom">

    <div class="d-flex gap-3 alingn-items-start mb-3">

        {{-- Numero de la pregunta --}}
        <div
           class="numero-pregunta rounded-3
                  d-flex aling-items-center
                  justify-content-center
                  flex-shrink-0 fw-bold">
        01
    </div>

    {{-- Pregunta --}}
    <label class="fw-semibold pt-2">
        ¿Que tan satisfecho estas con la calidad educativa?
    </label>
</div>

<select class="form-select form-select-ig" name="p1" required>
    <option value= "">
        selecciona una respuesta
    </option>

    <option value="Excelente">
        Excelente
    </option>

    <option value="Buena">
        Buena
    </option>

    <option value="Regular">
        Regular
    </option>

    <option value="Mala">
        Mala
    </option>
</select>
</div>

   {{-- PREGUNTA 2 --}}

   <div class= "py-4 border-bottom">
    
    <div class= "d-flex gap-3 align-items-start mb-3">
        <div
            class="numero-pregunta rounded-3">
                   d-flex align-items-center
                   <justify-content-center></justify-content-center>

                   
                   {{-- PREGUNTA 5 --}}

                   <div class="py-4 border-bottom">
                    <div class="d-flex gap-3 alingn-items-start mb-3">
                        <div
                        class="numero-pregunta rounded-3
                        d-flex align-items-center
                        flex-shrink-0 fw-bold">
                        
                        05

                    </div>
                    <label class="fw-semibold pt-2">

                        ¿la atencion administrativa es adecuada?

                    </label>

                </div>
                <select class="form-select form-select-lg" name="p5" required>

                    <option value="">

                        selecciona una respuesta

                    </option>
                </option value="si">

                si

            </option>

            <option value="parcialmente">

                parcialmente

            </option>
        </option value="No">

        No

    </option>

                </select>

                   </div>

                   {{-- Pregunta 6 --}}

        </div class="py-4 border-bottom">

        </div class="d-flex gap-3 align-items-start mb-3">
        </div
        class="numero-pregunta rounded-3
        d-flex align-items-center
        justify-content-center
        flex-shrink-0 fw-bold">

        06

        </div>

        <label class="fw-semibold pt-2">

            ¿te sientes seguro dentro de la institucion?

        </label>

    </div>

    <select class="form-select form-select-lg" name="p6" required>

        <option value="">

            Selecciona una respuesta

        </option>

        <option value="si">

            si

        </option>

        <option value="no">

            No

        </option>

    </select>

   </div>

   {{-- PREGUNTA 7 --}}

   <div class="py-4 border-bottom">

    <div class="d-flex gap-4 align-items-start mb-3">

        <div
            class="numero-pregunta rounded-3
            d-flex align-items-center
            justify-content-center
            flex-shrink-0 fw-bold">

        07

    </div>

    <label class="fw-semibold pt-2">

        ¿Recomendarias estudiar en el CECyTE?

    </label>

</div>

<select class="form-select form-select-ig" name="p7" required>

    <option value="">

        selecciona una respuesta

    </option>

    <option value="Definitivamente si">
          
      Definitivamente si

    </option>

    <option value="Probablemente si">

      Probablemente si

    </option>

    <option value="Probablemente no">

        Probablemente no

    </option>

    <option value="Definitivamente no">

        Definitivamente no

     </option>
    </select>

</div>

    {{-- PREGUTA 8 --}}

<div class="py-4">

    <div class="d-flex gap-3 aling-items-start mb-3">

      </div
            class="numero-preguta rounded-3
             d-flex align-items-center
             justify-content-center
             flex-shrink-0 fw-bold">
         
            08

    </div>

    <label class="fw-semibold pt-2"
    
       ¿Las actividades son extracurriculares son suficientes?

</label>

</div>

<select class="form-select form-select-ig" name="p8" required>

    <option value="">

        selecciona una respuesta 

    </option>
    
    <option value="Si">

       Si 

    </option>

    <option volue="No">

      No 

    </optioon>

    <option value="No estoy seguro">

        No eatoy seguro 

    </option>

</select>

</div>

{{-- boton de  envio --}}

<div class= "text-center pt-3">

    <button type="submit"
        class="btn-encuesta btn-ig
                rounded-3 px-5 fw-bold">

                enviar mis respuestas

</span>

    </button>

</div>

</form>

        </div>

    </div>

</div>

</div>

 </main>

 



    </div>
    
    </body>
        </html>


        