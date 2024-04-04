<?php
include ('conexion.php')
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tomografías</title>
    <link rel="icon" href="/img/Logo.ico">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/Estudios.css" />

    <!-- Link de fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/scrollreveal"></script>

</head>

<body>
     <!--Navbar-->
     <header>
        <a href="/index.html"><img class="img-navbar" src="/img/Logo.png" alt="Logo" /></a>
        <button id="open" class="open-nav"><i class='bx bx-menu'></i></button>
    
        <nav class="nav" id="nav">
          <button id="close" class="close-nav"><i class='bx bx-x'></i></button>
          <ul class="nav-list">
            <li><a href="/index.html">INICIO</a></li>
            <li><a href="/views/AboutUs.html">NOSOTROS</a></li>
    
            <li>
              <a href="/views/Services.html" style="color: #BD3C3C;">SERVICIOS</a>
              <ul class="serv-in">
                <li><a href="/views/Services/Tomografia.html" style="color: #BD3C3C;"></a>Tomografía</li>
                <li><a href="/views/Services/RX.html"></a>RX Convencional</li>
                <li><a href="/views/Services/Mamografia.html"></a>Mamografía</li>
                <li><a href="/views/Services/Resonancia.html"></a>Resonancia</li>
                <li><a href="/views/Services/Ecografia.html"></a>Ecografía</li>
                <li><a href="/views/Services/Especiales.html"></a>Procedimientos Especiales</li>
    
              </ul>
            </li>
    
            <li><a href="/views/Resultados.html">RESULTADOS</a></li>
            <li><a href="/views/ContactUs.html">CONTACTO</a></li>
          </ul>
        </nav>
      </header>


    <div class="title">
        <h1>Tomografías</h1>
        <p>La tomografía computarizada, TC, es un procedimiento con imágenes que usa equipo especial de rayos X para
            crear imágenes detalladas, o exploraciones, de regiones internas del cuerpo. A veces, también se llama
            tomografía axial computarizada (TAC).</p>
    </div>
    <div class="container-carousel-out">
        <div class="container-carousel">
            <div class="carruseles" id="slider">
                <div class="slider-section">
                    <img src="/img/Slider/Tomografia/carousel.png">
                </div>
                <div class="slider-section">
                    <img src="/img/Slider/Tomografia/2.png">
                </div>
                <div class="slider-section">
                    <img src="/img/Slider/Tomografia/3.png">
                </div>
                <div class="slider-section">
                    <img src="/img/Slider/Tomografia/4.png">
                </div>
                <div class="slider-section">
                    <img src="/img/Slider/Tomografia/5.png">
                </div>
            </div>
            <div class="btn-left"><i class='bx bx-chevron-left'></i></div>
            <div class="btn-right"><i class='bx bx-chevron-right'></i></div>
        </div>
    </div>

    <div class="preparaciones">
        <h4>Si desea conocer a mas a detalle las preparaciones según el tipo de tomografia, lo puede hacer a
            continuación selecionando el estudio en especifico:</h4>
            
            
    <form id="preparaciones">
        <label for="registros">Selecciona un examen:</label>
        <select id="registros" name="registro_id"></select>
        <br><br>
        <label for="texto">Campo de Texto:</label><br>
        <textarea id="texto" name="texto" readonly></textarea>
    </form>

    </div>

    <div class="bibliografia">
        <h4>Bibliografia</h4>
            <cite><p>Hoja informativa sobre exploraciones con tomografía computarizada (TC) para el cáncer. (2019, mayo 12).</p>Instituto Nacional del Cáncer. <a href="https://www.cancer.gov/espanol/cancer/diagnostico-estadificacion/hoja-informativa-tomografia-computarizada.">https://www.cancer.gov/espanol/cancer/diagnostico-estadificacion/hoja-informativa-tomografia-computarizada.</a></cite>
    
    <form>
        <label for="examen">Selecciona un examen:</label>
        <select id="examen" onchange="mostrarPreparacion()">
            <!-- Las opciones se cargarán dinámicamente desde JavaScript -->
        </select>
        <br><br>
        <label for="preparacion">Preparación:</label><br>
        <textarea id="preparacion" rows="4" cols="50" readonly></textarea>
    </form>

    </div>

    <!-- Footer -->
    <footer>
        <div class="img-salud">
            <img src="/img/logo-supersaludblanco.png" alt="Logo_Supersalud">
        </div>

        <div class="bloque2">
            <h4>Correo electrónico</h4>
            <a href="calidad@dptoradiologia.com" target="_blank">calidad@dptoradiologia.com</a>
            <br>
            <h4>Dirección</h4>
            <a href="https://maps.app.goo.gl/pJuejCYB29dg3StD9" target="_blank">Edificio La Palencia. Cra. 46 #
                50-28, La Candelaria,
                Medellín.</a>
        </div>

        <div class="bloque3">
            <a href="">Política de Tratamiento y Protección de Datos.</a>
            <a href="">Estados Financieros 2022</a>
            <a href="">PQRS</a>
            <a href="" style="color: rgb(235, 99, 99)">Intranet</a>
        </div>
    </footer>
    <script src="/main.js"></script>
</body>

</html>