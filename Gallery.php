<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Sonny Meriweather</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="imagenes/melpo.ico">
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
     <!--PRETTYPHOTO MAIN STYLE -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]--></head>
<body>
    <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #39ff14;">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="imagenes/melpo.jpg" width="30" height="30" alt="">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MERILUCHES!!
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #39ff14;">
                          <center>
                            <a class="dropdown-item" href="Meriluches.html">¿Que es un meriluche?</a><br>  
                          </center>
                          <center>
                            <a class="dropdown-item" href="PrimeraGeneracion.html">#1ra Generacion</a><br>  
                          </center>
                          <center>
                            <a class="dropdown-item" href="SegundaGeneracion.html">#2da Generacion</a>  
                          </center>
                        </div>
                    </li>
                    <li><a href="Consumemeri.html">CONSUMEMERI</a></li>
                    <li><a href="Gallery.php">COSPLAYS</a></li>
                    <li><a href="Contact.html">SOCIAL</a></li>
                </ul>
            </div>
           
        </div>
    </div>
    <!--END NAV SECTION -->
    
    <!-- PORTFOLIO SECTION-->
    <section id="port-sec">
       <div class="container">
           <center>
                <h4>GALERIAS DE COSPLAYS/OUTFITS!!!</h4>
           </center>
           <form action="SingleGallery.php" method="POST" id="miFormulario">
               <div class="row g-pad-bottom">
                    <div class="col-md-10 col-md-offset-1 col-sm-12">
                        <ul class="portfolio-items col-3">

                            <!-- Gallery Item -->
                            <?php
                                $imageDirectory = 'Miniaturas/'; // Ruta del directorio de imágenes

                                // Obtén la lista de archivos en el directorio
                                $files = scandir($imageDirectory);

                                // Filtra los archivos para asegurarte de que sean imágenes (puedes agregar más extensiones)
                                $imageFiles = array_filter($files, function ($file) {
                                    return preg_match("/\.(jpg|jpeg|png|gif)$/i", $file);
                                });

                                // Genera dinámicamente los elementos <img>
                                foreach ($imageFiles as $file) {
                                    $nombreGaleria = strtok($file, '.');
                                    echo '
                                        <li class="portfolio-item">
                                            <div class="item-main">
                                                <div class="portfolio-image">
                                                    <img src="' . $imageDirectory . $file . '" />
                                                    <button name="nombreGaleria" value="'.$nombreGaleria.'">Ver galeria</button>
                                                </div>
                                            </div>
                                        </li>';   
                                }
                            ?>
                            <!-- Fin gallery item -->

                        </ul>
                    </div>
               </div>
           </form>
       </div>
   </section>
     <!-- END PORTFOLIO SECTION-->
   

    <!--FOOTER SECTION -->
    <div id="footer">
        2022 Sonny Meriweather | All Right Reserved  
    </div>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.min.js"></script>  
     <!-- ISOTOPE SCRIPT   -->
    <script src="assets/plugins/jquery.isotope.min.js"></script>
    <!-- PRETTY PHOTO SCRIPT   -->
    <script src="assets/plugins/jquery.prettyPhoto.js"></script>    
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
