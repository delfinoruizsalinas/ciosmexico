<?php 
$url_site = 'http://188.166.16.108:1337';
?>

<!-- EVENTOS PRESENCIALES-->
<section class="section section-lg bg-default">
    <div class="container">
        <h3 class="title-decorate title-decorate-center text-center">CIO’s Presenciales</h3>
        <div class="row">
        <div class="col-12">
            <div class="owl-carousel" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
            
                <?php 
                    //url api eventos-virtuales                                                                           
                    $json = file_get_contents($url_site.'/api/evento-presencials?populate=imagen');
                    // Decode the JSON string into an object
                    $obj = json_decode($json);
                    // In the case of this input, do key and array lookups to get the values
                    foreach ($obj->data as $key => $value) {
                        
                        foreach($value->attributes->imagen as $item){

                                $url = $item->attributes->url;
                        }
                      
                        //comite-ejecutivo-biografia.php?id='.$value->id.'
                        echo '<div class="wow slideInUp">
                                <div class="post-classic">
                                <div class="post-classic-figure"><a href="eventos-detalle.php?id='.$value->id.'&evento=presencial"><img src="'.$url.'" alt="" width="370" height="255"/></a></div>
                                <div class="post-classic-caption">
                                    <h4 class="post-classic-title"><a href="eventos-detalle.php?id='.$value->id.'&evento=presencial">'.$value->attributes->titulo.'</a></h4>
                                    <ul class="post-classic-meta">
                                    <li>'.$value->attributes->fecha.'</li>
                                    <li><a class="post-classic-tag-secondary-2 post-classic-tag" href="#">'.$value->attributes->ubicacion.'</a></li>
                                    </ul>
                                </div>
                                </div>
                            </div>';
                    }           
                ?>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- EVENTOS CIOSVLOG-->

<section class="section section-lg bg-gray-1">
<div class="container">
<div class="wow-outer">
  <div class="wow slideInDown text-center">
      <h3 class="title-decorate title-decorate-center">CIO’s Vlog</h3>
    </div>
  </div>
  <div class="row row-50">
    <?php 
      //url api eventos-virtuales                                                                           
      $json = file_get_contents($url_site.'/api/evento-virtuals?populate=imagen');
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
            $fecha = '';
          }else{
            $fecha = date("d-m-Y", strtotime($value->attributes->fecha));                        
          }
          
          if(empty($value->attributes->hora)){
            $hora = '';
          }else{
            $hora = substr ($value->attributes->hora, 0, 5);                         
          }
          
          if(empty($value->attributes->titulo)){
            $titulo = '#';
          }else{
            $titulo = $value->attributes->titulo;                        
          }          
          
          foreach($value->attributes->imagen as $item){

                  if(empty($item->attributes->formats->small)){
                      $url = $item->attributes->url;
                  }else{
                      $url = $item->attributes->formats->small->url;                               
                  }
          }       
          echo '<div class="col-md-6 col-lg-4"><div class="post-modern"><div class="post-modern-figure"><a href="'.$youtube.'" target="_blank"><img src="'.$url.'" alt="" width="370" height="255"></a></div><div class="post-modern-caption"><p class="post-modern-date"> <span class="icon mdi mdi-calendar"></span> '.$fecha.' <span class="icon mdi mdi-clock"></span> '.$hora.'</p><h4 class="post-modern-title"><a href="'.$youtube.'" target="_blank">'.$titulo.'</a></h4></div></div></div>';
      }           
    ?>
  </div>
</div>
</section>


<!-- EVENTOS CIOS LIFES-->

<section class="section section-lg bg-default">
<div class="container">
<div class="wow-outer">
  <div class="wow slideInDown text-center">
      <h3 class="title-decorate title-decorate-center">CIO’s Life</h3>
    </div>
  </div>
  <div class="row row-50">
    <?php 
      //url api eventos-virtuales                                                   
      $json = file_get_contents($url_site.'/api/evento-cio-lives?populate=imagen');
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
            $fecha = '';
          }else{
            $fecha =date("d-m-Y", strtotime($value->attributes->fecha));                        
          }
          
          if(empty($value->attributes->hora)){
            $hora = '';
          }else{
            $hora = substr ($value->attributes->hora, 0, 5);                         
          }
          
          if(empty($value->attributes->titulo)){
            $titulo = '#';
          }else{
            $titulo = $value->attributes->titulo;                        
          }          
          
          foreach($value->attributes->imagen as $item){

                  if(empty($item->attributes->formats->small)){
                      $url = $item->attributes->url;
                  }else{
                      $url = $item->attributes->formats->small->url;                               
                  }
          }      
          echo '<div class="col-md-6 col-lg-4">
          <div class="wow slideInDown" style="visibility: visible; animation-name: slideInDown;">
            <div class="post-modern post-modern-reverse">
              <div class="post-modern-figure"><a href="'.$youtube.'" target="_blank"><img src="'.$url.'" alt="" width="370" height="255"></a></div>
              <div class="post-modern-caption">
                <p class="post-modern-date"> <span class="icon mdi mdi-calendar"></span> '.$fecha.' <span class="icon mdi mdi-clock"></span> '.$hora.'</p>
                <h4 class="post-modern-title"><a href="'.$youtube.'" target="_blank">'.$titulo.'</a></h4>
              </div>
            </div>
          </div>
        </div>';
      }           
    ?>
  </div>
</div>
</section>

<!-- EVENTOS ENTRE AMIGOS-->

<section class="section section-lg bg-gray-1">
<div class="container">
<div class="wow-outer">
  <div class="wow slideInDown text-center">
      <h3 class="title-decorate title-decorate-center">CIO’s Entre Amigos</h3>
    </div>
  </div>
  <div class="row row-50">
    <?php 
      //url api eventos-virtuales                                                                           
      $json = file_get_contents($url_site.'/api/entre-amigos?populate=imagen');
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
            $fecha = '';
          }else{
            $fecha =  date("d-m-Y", strtotime($value->attributes->fecha));                         
          }
          
          if(empty($value->attributes->hora)){
            $hora = '';
          }else{
            $hora =  substr ($value->attributes->hora, 0, 5);                       
          }
          
          if(empty($value->attributes->titulo)){
            $titulo = '#';
          }else{
            $titulo = $value->attributes->titulo;                        
          }          
          
          foreach($value->attributes->imagen as $item){

                  if(empty($item->attributes->formats->small)){
                      $url = $item->attributes->url;
                  }else{
                      $url = $item->attributes->formats->small->url;                               
                  }
          }       
          echo '<div class="col-md-6 col-lg-4"><div class="post-modern"><div class="post-modern-figure"><a href="'.$youtube.'" target="_blank"><img src="'.$url.'" alt="" width="370" height="255"></a></div><div class="post-modern-caption"><p class="post-modern-date"> <span class="icon mdi mdi-calendar"></span> '.$fecha.' <span class="icon mdi mdi-clock"></span> '.$hora.'</p><h4 class="post-modern-title"><a href="'.$youtube.'" target="_blank">'.$titulo.'</a></h4></div></div></div>';
        }
                
    ?>
  </div>
</div>
</section>
