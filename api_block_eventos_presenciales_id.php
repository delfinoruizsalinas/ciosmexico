<?php 
    $idbiog = $_GET["id"];
    
      //url api eventos-virtuales                                                                           
      $json = file_get_contents('http://178.62.220.4:1337/api/evento-presencials/'.$idbiog.'?populate=imagen');
      // Decode the JSON string into an object
      $obj = json_decode($json);
      // In the case of this input, do key and array lookups to get the values
          $url = 'http://178.62.220.4:1337';
          //echo $obj->data->attributes->imagen->data->attributes->formats->thumbnail->url;

          echo '<section class="section section-lg bg-default">
          <div class="container">
            <div class="row row-50 justify-content-lg-between">
              <div class="col-lg-6">
                <ul class="blog-post-meta">
                  <li><a class="badge" href="#">'.$obj->data->attributes->ubicacion.'</a></li>
                  <li><span class="icon mdi mdi-calendar"></span>'.$obj->data->attributes->fecha.'</li>
                </ul>
                <h3 class="blog-post-title">'.$obj->data->attributes->titulo.'</h3>
                <div class="blog-post-content">'.$obj->data->attributes->descripcion.'</div>
              </div>
              <div class="col-lg-6 col-xl-5"><img src="'.$url.$obj->data->attributes->imagen->data->attributes->url.'" alt="" width="518" height="569"/>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="blog-post-share text-lg-right">
                  <ul class="list-inline">
                    <li class="thin-title">COMPARTIR</li>
                    <li><a class="icon icon-sm fa-facebook" href="#"></a></li>
                    <li><a class="icon icon-sm fa-instagram" href="#"></a></li>
                    <li><a class="icon icon-sm fa-twitter" href="#"></a></li>
                    <li><a class="icon icon-sm fa-youtube-play" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>';


?>