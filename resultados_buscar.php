<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistas</title>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Freehand&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Freehand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Square+Peg&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   
    <!--BootStrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="body">
    <header class=" header">
      <nav class="navbar navbar-light bg-light navbar-expand-lg fixed-top">
        <div class="container-fluid cande">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.html"><img class="logo"src="imgs/logo-11.png"></a>
        </div>
       
          <button class="navbar-toggler boton" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="offcanvas offcanvas-end" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header navbar-header  logoresponsive">
              <a class="navbar-brand text-white" href="index.html"><img class="offcanvas-title " id="offcanvasNavbarLabel" src="imgs/logo-11.png"></a> 
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body canvas">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3  seccionesfauvismo">
                <li class="nav-item"><a class="nav-link" href="historia.html">HISTORIA</a> </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">ARTISTAS</a>
                  <ul class="dropdown-menu menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="derain.html">André Derain</a></li>
                    <li><a class="dropdown-item" href="matisse.html">Henri Matisse</a></li>
                    <li><a class="dropdown-item" href="vlaminck.html">Maurice de Vlaminck</a></li>
                    <li><a class="dropdown-item" href="manguin.html">Henri Manguin</a></li>
                    <li><a class="dropdown-item" href="marquet.html">Albert Marquet</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="filosofia.html">FILOSOFÍA</a></li>
                <li class="nav-item"> <a class="nav-link" href="galeria.html">GALERÍA</a></li>
                <li class="nav-item"><a class="nav-link" href="contacto.html">CONTACTO</a></li>
              </ul>
            </div>
          </div>
        </div>
          <form class="d-flex buscadorbarranav">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="botonsearch" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
    </header>
    <body>
        <section class="container text-end buscador">
            <div class="buscador">
                <div class="buscar">
                    <h2>¿que artista buscabas?</h2>
                     <input type="textarea" class="texto" name="search" action="" placeholder="Buscar" class="src" autocomplete="off">
               </div>
            </div>
        </section>
        <section class="container andrederain">

  <!-- conexion -->
        <?php
	include('conexion.php');
	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artista WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
  ?>
        <div class="row">
                <div class="col-lg-4 col-sm-10">
                  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                  <div class="carousel-item active">
                
                <!-- bucle -->
                 <?php
		             while ($resultados=mysqli_fetch_array($consulta)) {
                	?>
                
                  <!-- echo carousel -->
                  <img class=" d-block w-100 derainimg" src="<?php echo $resultados ['carouseluno']; ?>">
                  </div>
                  <div class="carousel-item">
                  <img class=" d-block w-100 derainimg" src="<?php echo $resultados ['carouseldos']; ?>">
                  </div>
                </div>
              </div>
                    <img class="pinceladaderain andrederain" src="imgs/pincelada-12.png">
                    
                      <!-- echo autoretrato-->
                    <img class="autoretrato animado" src="<?php echo $resultados['autoretrato']; ?>">

                    <img class="pinceladaderaindos animado" src="imgs/pincelada-12.png">
                </div>
                <div class="col-1">
                </div>
                <div class="col-lg-6 col-sm-10 txtandrederain">

                      <!-- echo nombre y apellido -->
                    <?php
                    echo $resultados['nombre'] . " ";
                    echo $resultados['apellido'] . "<br>";
                    ?>
                    <img class="pinceladaderaintres" src="imgs/pincelada-12.png">

                    <!-- echo biografia -->
                    <?php
                    echo $resultados['biouno'] ." ";
                    ?>

                </div>
                <div class="col-2 barquito">
                  <img src="imgs/barquito.png">
                </div>
                <div class="col-8 col-sm-8 txtandrederaindos">
                 <!-- echo biografiados -->
                <?php
                    echo $resultados['biodos'] . " ";
                    ?>
                </div>
                <div class="col-1 barquito">
                 
                 </div>
                <div class="3">
                  <img class="pinceladaderaincuatro animado" src="imgs/pincelada-12.png">
                </div>
                </div>
                <div class="container row obrasderain animado mb-5">
                <div class="col-lg-4 col-sm-12">
              <!-- echo obras -->
                 <img src="<?php echo $resultados['obrauno']; ?>">
                 </div>
                 <div class="col-lg-4 col-sm-12">
                 <img src="<?php echo $resultados['obrados']; ?>">
                 </div>
                 <div class="col-lg-4 col-sm-12">
                 <img src="<?php echo $resultados['obratres']; ?>">
                 </div>
                </div>
           
           <?php
        }
		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
        </section>



        <footer class="footersitio">
          <p class="text-center  bg-secondary text-white p-3 dariobarassi">Candela Arigós </p>
          </footer>
      
      <!-- BootStrap JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="js/animar.js"></script>
      </body>
      </html>