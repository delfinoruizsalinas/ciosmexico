<section class="section section-lg bg-default">
    <div class="container">
        <h3 class="title-decorate title-decorate-center text-center">Eventos Presenciales</h3>
        <div class="row">
        <div class="col-12">
            <div class="owl-carousel" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
            
                <?php 
                    //url api eventos-virtuales                                                                           
                    $json = file_get_contents('http://178.62.220.4:1337/api/evento-presencials?populate=imagen');
                    // Decode the JSON string into an object
                    $obj = json_decode($json);
                    // In the case of this input, do key and array lookups to get the values
                    foreach ($obj->data as $key => $value) {
                        
                        foreach($value->attributes->imagen as $item){

                                $url = 'http://178.62.220.4:1337'.$item->attributes->url;
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