<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Cios Mexicanos - Comite Ejecutivo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/cios/logo_icono.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CRoboto:400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/cios/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <?php include 'header.php' ?>
      <!-- Swiper-->
      <section class="parallax-container" data-parallax-img="images/cios/pexels-fauxels-3183197.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Comité Ejecutivo</h2>
                <ul class="breadcrumbs-custom-path">
                  <li><a href="index.php">Inicio</a></li>
                  <li class="active">Comité Ejecutivo</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-1">
        <div class="container">
          
          <div class="row no-gutters">
            <div class="col-md-6 col-lg-4">
              <div class="team-modern">
                <div class="team-modern-figure"><img src="images/cios/MariselaOrcolor.jpg" alt="" width="390" height="252"/>
                  <ul class="team-modern-soc-list">
                    <li><a class="icon icon-md fa-linkedin" href="https://www.linkedin.com/in/marisela-orihuela-tecnologia/" target="_blank"></a></li>
                  </ul>
                </div>
                <div class="team-modern-caption">
                  <h4><a class="team-name" href="#">Marisela Orihuela</a></h4>
                  <p>Presidente de CIO's Mexicanos</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="team-modern">
                <div class="team-modern-figure"><img src="images/cios/Juan-CarlosOM.jpg" alt="" width="390" height="252"/>
                  <ul class="team-modern-soc-list">
                    <li><a class="icon icon-md fa-linkedin" href="https://www.linkedin.com/in/juan-carlos-ortiz/" target="_blank"></a></li>
                  </ul>
                </div>
                <div class="team-modern-caption">
                  <h4><a class="team-name" href="#">Juan Carlos Ortiz de M.</a></h4>
                  <p>Vicepresidente, CIO's Mexicanos</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="team-modern">
                <div class="team-modern-figure"><img src="images/cios/RafaelSanchez.jpg" alt="" width="390" height="252"/>
                  <ul class="team-modern-soc-list">
                    <li><a class="icon icon-md fa-linkedin" href="https://www.linkedin.com/in/rafael-sanchez-ferreiro-19613724/" target="_blank"></a></li>
                  </ul>
                </div>
                <div class="team-modern-caption">
                  <h4><a class="team-name" href="#">Rafael Sánchez</a></h4>
                  <p>Director General, CIO's Mexicanos</p>
                </div>
              </div>
            </div>            
            <div class="col-md-6 col-lg-4">
              <div class="team-modern">
                <div class="team-modern-figure"><img src="images/cios/Victor-Ninomiya.jpg" alt="" width="390" height="252"/>
                  <ul class="team-modern-soc-list">
                    <li><a class="icon icon-md fa-linkedin" href="https://www.linkedin.com/in/victor-ninomiya-1931b1/" target="_blank"></a></li>
                  </ul>
                </div>
                <div class="team-modern-caption">
                  <h4><a class="team-name" href="#">Victor Ninomiya</a></h4>
                  <p>Secretario, CIO's Mexicanos</p>
                </div>
              </div>
            </div>
        
          </div>
        </div>
      </section>     
      
      <!-- api partners -->   

      <?php
        include('api_block_partners.php');
      ?>


      <!-- Page Footer-->
      <?php include 'footer.php' ?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>