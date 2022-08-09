
<?php 
      //url api eventos-virtuales                                                                           
      $json = file_get_contents('http://178.62.220.4:1337/api/biografias?populate=imagen');
      // Decode the JSON string into an object
      $obj = json_decode($json);
      // In the case of this input, do key and array lookups to get the values
      foreach ($obj->data as $key => $value) {
         
          
          foreach($value->attributes->imagen as $item){
                
                  if(empty($item->attributes->formats->thumbnail)){
                      $url = 'http://178.62.220.4:1337'.$item->attributes->url;
                  }else{
                      $url = 'http://178.62.220.4:1337'.$item->attributes->formats->thumbnail->url;                               
                  }
          }

          echo '<div class="event-item-classic wow slideInleft">
            <div class="event-item-classic-figure"><a href="comite-ejecutivo-biografia.php?id='.$value->id.'"><img src="'.$url.'" alt="" width="109" height="109"/></a>
            </div>
            <div class="event-item-classic-caption">
            <h4 class="event-item-classic-title"><a href="comite-ejecutivo-biografia.php?id='.$value->id.'">'.$value->attributes->titulo.'</a></h4>
            <p class="events-time">'.$value->attributes->cargo.' </p>
            </div>
        </div>';

      }           

?>
