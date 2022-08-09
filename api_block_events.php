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
  </div>
</div>
</section>
