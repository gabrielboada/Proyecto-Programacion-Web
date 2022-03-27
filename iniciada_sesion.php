<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
           <script>
               alert("Debes iniciar sesion");
               window.location = "login-registro.html";
           </script>
        ';
        session_destroy();
        die();
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="estilos_iniciosesion.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&family=Titillium+Web:wght@300;400;600&display=swap" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <title>GABOS</title>

  </head>
  <body>

      <nav class="navbar navbar-expand-lg">
          <div class="container">
          <a class="navbar-brand" href="#">GABOS</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <form class="form-inline my-2 my-lg-0">
            
            <a href="cerrar_sesion.php" class="btnn btnn-light">Cerrar Sesión <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
            
          </form>
          
          </div>
          </div>
        </nav>

      <section id="hero">
        <div class="container">
          <div class="content-center topmargin-lg">
          <h3 class="encabezadouno">BIENVENIDO A NUESTRO MENÚ ESTIMADO CLIENTE</h3>
          <br>
          <h1 class="titulo">DULCES Y PASTELES GABOS</h1>
          <br>
          <h4 class="letras">Gracias por registrarte como nuestro "Cliente Favorito". Como agradecimiento tendrás un descuento especial en tu pedido de hasta el 20%!
    
          </h4>
          <br>

          </div>

        </div>
      </section>

      <div class="elegir">

        <div class="centrar">
            <div class="izquierda">
                <div class="img-elige">
                    <img src="22.jpg">

                </div>

            </div>

            <div class="derecha">
                <h4 class="texto-white">Endulza tu vida con nuestros dulces y pasteles</h4>

                <h1>¿Qué te apetece ordenar?</h1>
        

                <p class="texto-white">
                    Tenemos los mejores dulces, postres, pasteles, galletas y ponquesitos que jamás encontrarás en otro lugar. Te ofrecemos una excelente calidad en materiales y servicios.
                    <br><br>

                    Aprovecha nuestro descuento especial en tu pedido! Elige a GABOS y no te arrepentirás! y recuerda ¡ENDULZA TU VIDA CON GABOS! Contamos con DELIVERY!

                </p>

              
                

                <div class="opciones">

                    <div class="opcion">
                        <div class="img-opciones">
                            <img src="estrella.png" class="img-opciones">
                        </div>
                        <h4 class="texto-opciones">Calidad</h4>
                    </div>

                    <div class="opcion">
                        <div class="img-opciones">
                            <img src="manito.png" class="img-opciones">
                        </div>
                        <h4 class="texto-opciones">Eficiencia</h4>
                    </div>

                    <div class="opcion">
                        <div class="img-opciones">
                            <img src="reloj.png" class="img-opciones">
                        </div>
                        <h4 class="texto-opciones">Puntualidad</h4>
                    </div>

                    <div class="opcion">
                        <div class="img-opciones">
                            <img src="manga.png" class="img-opciones">
                        </div>
                        <h4 class="texto-opciones">Presentación</h4>
                    </div>

                </div>

            </div>

        </div>

      </div>

      <section id="portafolio">
          <div class="container-fluid">
              <div class="content-center">
                  <br>
                  <h3 class="black"><b>NUESTRO MENÚ</b></h3>
                  <h2 class="beige">TE OFRECEMOS:</h2>

              </div>
          </div>

          <div class="row">
              <div class="col-nd-6">
                  <div class="portafolio-container">
                      <div class="portafolio-details">
                          <a href="#">
                              <h1>PASTELES</h1>
                          </a>
                          <a href="#">
                            <h4 class="caja">Tortas para cualquier evento y de cualquier motivo, forma, tamaño y sabor. Te ofrecemos desde torta tres leches simples, hasta tortas de varios pisos elegantes.
                                ¡Lo que pidas te lo hacemos!
                            </h4>
                        </a>
                          
                      </div>
                      <img src="TORTAS-SESION.jpg" class="img-fluid" alt="portafolio 1">
                  </div>
              </div>

              <div class="col-nd-6">
                <div class="portafolio-container">
                    <div class="portafolio-details">
                        <a href="#">
                            <h1>DULCES</h1>
                        </a>
                        <a href="#">
                          <h4 class="caja">Dulces de cualquier tipo, motivo, forma, tamaño y sabor. Te ofrecemos desde mini tartaletas de fresa, hasta porciones de torta tiramisú.
                              ¡Lo que pidas te lo hacemos! 
                          </h4>
                      </a>
                        
                    </div>
                    <img src="DULCES-SESION.jpg" class="img-fluid" alt="portafolio 2">
                </div>
            </div>

            <div class="col-nd-6">
                <div class="portafolio-container">
                    <div class="portafolio-details">
                        <a href="#">
                            <h1>PONQUESITOS</h1>
                        </a>
                        <a href="#">
                          <h4 class="caja">Ponquesitos de cualquier tipo, motivo, tamaño y sabor. Te ofrecemos desde ponquesitos de oreo, hasta ponquesitos con decoraciones elegantes.
                            ¡Lo que pidas te lo hacemos!
                          </h4>
                      </a>
                        
                    </div>
                    <img src="PONQUESITOS-SESION.jpg" class="img-fluid" alt="portafolio 3">
                </div>
            </div>

            <div class="col-nd-6">
                <div class="portafolio-container">
                    <div class="portafolio-details">
                        <a href="#">
                            <h1>GALLETAS</h1>
                        </a>
                        <a href="#">
                          <h4 class="caja">Galletas de cualquier tipo, motivo, forma, tamaño y sabor. Te ofrecemos desde mini galletas azucaradas, hasta alfajores con dulce de leche.
                            ¡Lo que pidas te lo hacemos!
                          </h4>
                      </a>
                        
                    </div>
                    <img src="GALLETAS-SESION.jpg" class="img-fluid" alt="portafolio 4">
                </div>
            </div>

            <div class="text-center topmargin-md ">
                <h4 class="black">¿Listo para ordenar?</h4>
                <h4 class="black">¡Recuerde que ofrecemos hasta un 20% de descuento en su pedido! </h4>
                <h4 class="black">¿Qué Esperas? ¡CONTÁCTENOS! </h4>
                <br>
            </div>

          </div>
      </section>

      <footer class="footer">
        <div class="centrar">
            <div class="izquierda">
                <h4>CONTÁCTENOS O DIRÍJASE A NUESTRO LOCAL</h4>
                <br>
                <P>
                    Para más información y para realizar su pedido contáctenos por los siguientes medios o dirijase a nuestro local ¡TE ESPERAMOS!. 
                    ¿Qué Esperas? ENDULZATE LA VIDA CON GABOS! 
                </P><br>

                <ul>
                    <li><b>TELÉFONO:</b> 0212-332-27-89</li>
                    <li><b>WHATSAPP:</b> 0424-126-41-98</li>
                    <li><b>INSTAGRAM:</b> @GABOS_dulcesypasteles</li>
                    <li><b>FACEBOOK:</b> GABOS dulces y pasteles</li>
                    <li><b>DIRECCIÓN:</b> CCL. Local:28. Maiquetía. La Guaira - Venezuela</li>
                    <br>

                </ul>

            </div>

        </div>
        <div class="centrar">
            <p class="pie">
                Todos los derechos reservados (c) - Creado por GABRIEL BOADA
            </p>

        </div>

      </footer>

     <!-- Optional JavaScript; choose one of the two! -->

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    </body>
</html>