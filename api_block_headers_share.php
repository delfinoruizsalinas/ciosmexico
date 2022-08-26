<?php 
    $idbiog = $_GET["id"];
    $evento = $_GET["evento"];
    $url = 'http://178.62.220.4:1337';

    if($evento == "presencial"){  //url api eventos-presenciales
        $json = file_get_contents($url.'/api/evento-presencials/'.$idbiog.'?populate=imagen');
        // Decode the JSON string into an object
        $obj = json_decode($json);
        // In the case of this input, do key and array lookups to get the values

        //echo $obj->data->attributes->imagen->data->attributes->formats->thumbnail->url;
        echo '<meta property="og:url" content="eventos-detalle.php?id='.$idbiog.'" />
        <meta property="og:type" content="Sitio Web" />
        <meta property="og:title" content="'.$obj->data->attributes->titulo.'" />
        <meta property="og:image" content="'.$url.$obj->data->attributes->imagen->data->attributes->url.'" />';
    }
    if($evento == "noticia"){  //url api eventos-presenciales
        //url api eventos-virtuales                                                                           
        $json = file_get_contents($url.'/api/events/'.$idbiog.'?populate=imagen');
        // Decode the JSON string into an object
        $obj = json_decode($json);
        //foreach($value->attributes->imagen as $item){
         
        echo '<meta property="og:url" content="eventos-detalle.php?id='.$idbiog.'&evento=noticia" />
        <meta property="og:type" content="Sitio Web" />
        <meta property="og:title" content="'.$obj->data->attributes->titulo.'" />
        <meta property="og:image" content="'.$url.$obj->data->attributes->imagen->data[0]->attributes->formats->small->url.'" />';
      }                                                                        
      

?>