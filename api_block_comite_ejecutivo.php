<?php 
      //url api eventos-virtuales                                                                           
      $json = file_get_contents('http://178.62.220.4:1337/api/biografias?populate=imagen');
      // Decode the JSON string into an object
      $obj = json_decode($json);
      // In the case of this input, do key and array lookups to get the values
      foreach ($obj->data as $key => $value) {
         
          $resumen = "";
          $ld = "";
          foreach($value->attributes->imagen as $item){

                  $url = 'http://178.62.220.4:1337'.$item->attributes->url;
          }
          $ld = $value->attributes->linkdn;
          echo '<div class="col-md-6 col-lg-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="team-modern">
                <div class="team-modern-figure"><img src="'.$url.'" alt="" width="375" height="290">
                <ul class="team-modern-soc-list">
                    <li><a class="icon icon-sm fa-linkedin" href="'.$ld.'" target="_blank"></a></li>
                    <li><a class="icon icon-sm fa-youtube-play" href="https://www.youtube.com/c/CIOsMexicanosLATAMTV" target="_blank"></a></li>
                    <li><a class="icon icon-sm fa-twitter" href="https://twitter.com/CIOsMexOficial" target="_blank"></a></li>
                </ul>
                </div>
                <div class="team-modern-caption">
                <h4><a class="team-name" href="comite-ejecutivo-detalle.php?id='.$value->id.'">'.$value->attributes->titulo.'</a></h4>
                <p>'.$value->attributes->cargo.' </p>
                </div>
            </div>
            </div>';
      }           

?>
