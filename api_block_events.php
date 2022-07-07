<section class="section section-lg bg-gray-1">
<div class="container">
<div class="wow-outer">
  <div class="wow slideInDown text-center">
      <h3 class="title-decorate title-decorate-center">Eventos CIO’s Mexicanos & Latam</h3>
    </div>
  </div>
  <div class="row row-50">
    <?php 
      //url api eventos-virtuales                                                                           
      $json = file_get_contents('http://178.62.220.4:1337/api/evento-virtuals?populate=imagen_front');
      // Decode the JSON string into an object
      $obj = json_decode($json);
      // In the case of this input, do key and array lookups to get the values
      foreach ($obj->data as $key => $value) {
          $url ="";
          $link = "";
          $i = $key;
          $youtube ="";
          $fecha ="";
          $hora ="";
          $titulo ="";

          if(empty($value->attributes->link_pange)){
              $link = '#';
          }else{
              $link = $value->attributes->link_pange;                        
          }

          if(empty($value->attributes->youtube)){
            $youtube = '#';
          }else{
            $youtube = $value->attributes->youtube;                        
          }

          if(empty($value->attributes->fecha)){
            $fecha = '2022';
          }else{
            $fecha = $value->attributes->fecha;                        
          }
          
          if(empty($value->attributes->hora)){
            $hora = '00';
          }else{
            $hora = $value->attributes->hora;                        
          }
          
          if(empty($value->attributes->titulo)){
            $titulo = '#';
          }else{
            $titulo = $value->attributes->titulo;                        
          }          
          
          foreach($value->attributes->imagen_front as $item){

                  if(empty($item->attributes->formats->thumbnail)){
                      $url = 'http://178.62.220.4:1337'.$item->attributes->url;
                  }else{
                      $url = 'http://178.62.220.4:1337'.$item->attributes->formats->thumbnail->url;                               
                  }
          }       
          echo '<div class="col-md-6 col-lg-4"><div class="post-modern"><div class="post-modern-figure"><a href="'.$youtube.'" target="_blank"><img src="'.$url.'" alt="" width="370" height="255"></a><a class="badge-primary badge" href="#">CIOsVlog</a></div><div class="post-modern-caption"><p class="post-modern-date">'.$fecha.':'.$hora.'</p><h4 class="post-modern-title"><a href="'.$youtube.'" target="_blank">'.$titulo.'</a></h4></div></div></div>';
      }           
    ?>

<!--
    <div class="col-md-6 col-lg-4">
      <div class="post-modern post-modern-reverse">
        <div class="post-modern-figure"><a href="https://www.youtube.com/watch?v=9LTCpl_z-UM" target="_blank"><img src="images/cios/event4.png" alt="" width="370" height="255"/></a><a class="badge-secondary badge" href="#">Entre Amigos</a></div>
        <div class="post-modern-caption">
          <p class="post-modern-date">5/5/2022 20:00</p>
          <h4 class="post-modern-title"><a href="https://www.youtube.com/watch?v=9LTCpl_z-UM" target="_blank">Estreno de nuestro primer programa "Entre Amigos"</a></h4>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="post-modern">
        <div class="post-modern-figure"><a href="https://www.youtube.com/watch?v=JvsSCbHF1Ac" target="_blank"><img src="images/cios/event1.jpeg" alt="" width="370" height="255"/></a><a class="badge-primary badge" href="#">CIOsVlog</a></div>
        <div class="post-modern-caption">
          <p class="post-modern-date">7/6/2022 19:00</p>
          <h4 class="post-modern-title"><a href="https://www.youtube.com/watch?v=JvsSCbHF1Ac" target="_blank">Cumplimiento de las obligaciones fiscales en la empresa</a></h4>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="post-modern post-modern-reverse">
        <div class="post-modern-figure" target="_blank"><a href="#"><img src="images/cios/event6.jpeg" alt="" width="370" height="255"/></a><a class="badge" href="#">Noticias del día</a></div>
        <div class="post-modern-caption">
          <p class="post-modern-date"></p>
          <h4 class="post-modern-title" target="_blank"><a href="#">El 30 de junio de 1970, IBM anunció la IBM System/370.</a></h4>
        </div>
      </div>
    </div>               
    <div class="col-md-6 col-lg-4">
      <div class="post-modern">
        <div class="post-modern-figure"><a href="https://www.youtube.com/watch?v=Yvt2UR-6yUM" target="_blank"><img src="images/cios/event2.png" alt="" width="370" height="255"/></a><a class="badge-primary badge" href="#">CIOsVlog</a></div>
        <div class="post-modern-caption">
          <p class="post-modern-date">6/6/2022 19:00</p>
          <h4 class="post-modern-title"><a href="https://www.youtube.com/watch?v=Yvt2UR-6yUM" target="_blank">Ciberdefensa de la mano de nuestro partner Netjer Networks México</a></h4>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="post-modern post-modern-reverse">
        <div class="post-modern-figure" target="_blank"><a href="#"><img src="images/cios/event5.jpeg" alt="" width="370" height="255"/></a><a class="badge" href="#">Noticias del día</a></div>
        <div class="post-modern-caption">
          <p class="post-modern-date"></p>
          <h4 class="post-modern-title" target="_blank"><a href="#">EL 8 de junio de 1995 fue el lanzamiento de PHP</a></h4>
        </div>
      </div>
    </div>            
    <div class="col-md-6 col-lg-4">
      <div class="post-modern">
        <div class="post-modern-figure"><a href="https://www.youtube.com/watch?v=HCjMH9FweKw" target="_blank"><img src="images/cios/event3.jpeg" alt="" width="370" height="255"/></a><a class="badge-primary badge" href="#">CIOsVlog</a></div>
        <div class="post-modern-caption">
          <p class="post-modern-date">7/5/2022 19:00</p>
          <h4 class="post-modern-title"><a href="https://www.youtube.com/watch?v=HCjMH9FweKw" target="_blank">Perspectivas económicas del entorno global y local para este 2022.</a></h4>
        </div>
      </div>
    </div>            
-->
  </div>
</div>
</section>
