<!--Integrantes:
Ayala Alvarado Cristal, No. de Control: 22308060610299
Cruz Silva Cristian Josue, No. Control:22308060610693
Pargas Castillo Jocelin, No. Control:22308060610348

Es una pagina web que habla acerca de una empresa que realizo el grupo de recurso de Recursos Humanos
Fecha: 30/05/24!-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <meta name="description" content="Paz y Flora crea macetas innovadoras y ecológicas hechas de materiales sostenibles para promover el crecimiento saludable de las plantas.">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Paz y Flora">
    <meta name="keywords" content="macetas ecológicas, sostenibilidad, plantas, medio ambiente, Paz y Flora">
    
    <meta property="og:title" content="Paz y Flora - Macetas Ecológicas">
    <meta property="og:description" content="Paz y Flora crea macetas innovadoras y ecológicas hechas de materiales sostenibles para promover el crecimiento saludable de las plantas.">
    <meta property="og:image" content="https://www.pazyflora.com/img/logo.png">
    <meta property="og:url" content="https://www.pazyflora.com">
    <meta property="og:type" content="website">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body class="index">
<div class="header-bar">
    <div style="display: flex; align-items: center;">
      <img src="img/logo.png" alt="Logo" class="image-container circular-image">
      <h1 class="hola">Paz y Flora</h1>
    </div>
    <!-- Botón del menú (hamburguesa) -->
    <button class="menu-toggle btn btn-black d-lg-none">
      <div class="menu-toggle-icon"></div>
      <div class="menu-toggle-icon"></div>
      <div class="menu-toggle-icon"></div>
    </button>
    <div class="menu">
      <ul>
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="pages/vision.php">Vision</a></li>
        <li><a href="pages/mision.php">Mision</a></li>
        <li><a href="pages/acerca.php">Acerca</a></li>
        <li><a href="pages/objetivo.php">Objetivo</a></li>
      </ul>
    </div>
  </div>
  <script>
    // Agregar funcionalidad para mostrar/ocultar el menú en dispositivos pequeños
    document.querySelector('.menu-toggle').addEventListener('click', function() {
      document.querySelector('.menu').classList.toggle('show');
    });
  </script>
    
    <main>
        <section class="fondo">
            <div class="container">
                <div class="container-fondo">
                    <h4>La actividad principal de Paz y Flora es crear macetas innovadoras y ecológicas,
                        que estén hechas de materiales sostenibles y que incorporen características innovadoras para
                        promover el crecimiento saludable de las plantas.
                        También continuamos con la investigación y desarrollo de nuevos materiales y tecnologías,
                        así como la creación de diseños atractivos y funcionales que satisfagan las necesidades tanto de
                        los clientes como del medio ambiente. Esta idea surge de la problemática de no tener tiempo suficiente para cuidar de las plantas. 
                        Lo que nos hace diferente de las demás empresas es que nuestra mercancía o macetas son innovadoras las 
                        cuales están hechas con materiales ecológicos y hace que es no sea dañino para el planeta también facilita el cuidado de ellas por si no hay mucho tiempo para cuidarlo.
                    </h4>
                </div>
                
                <!-- Cards container placed after the text -->
                <div class="cards-container mt-4">
                    <div class="card">
                        <img src="./img/maceta1.jpeg" class="card-img-top" alt="producto de la empresa">
                    </div>
                    <div class="card">
                        <img src="./img/maceta2.jpeg" class="card-img-top" alt="producto de la empresa">
                    </div>
                    <div class="card">
                        <img src="./img/maceta3.jpeg" class="card-img-top" alt="producto de la empresa">
                    </div>
                    <div class="card">
                        <img src="./img/maceta4.jpeg" class="card-img-top" alt="producto de la empresa">
                    </div>
                </div>
                <!-- End of cards container -->
            </div>
        </section>
    </main>

    <div class="container-footer text-white">
        <footer>
            <div class="row">
                <div class="footer-col col-md-6">
                    <h6>Contactanos:</h6>
                    <strong>Correo electrónico:</strong> PazYFlora@gmail.com
                    <strong>Numero de teléfono: </strong>656-904-9465
                </div>
                <div class="footer-col col-md-6">
                    <strong>Nos encontramos en:</strong>
                    <p>Calle Pedro General Bracamontes</p>
                    <p>Col. Santa Maria #8820</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
