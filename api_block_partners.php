<section class="section section-lg bg-default text-center">
    <div class="container">
        <div class="wow-outer">
        <div class="wow slideInDown">
            <h3 class="title-decorate title-decorate-center">Algunos de Nuestros Partners</h3>
        </div>
        </div>
        <div class="row row-30">
        <div class="col-12 wow-outer">
            <div class="wow slideInDown">
            <h5 class="gradient-title text-gradient-2"></h5>
            </div>
        </div>
        <?php 
                //url api partners                                                                           
                $json = file_get_contents('http://178.62.220.4:1337/api/partners?populate=imagen');
                // Decode the JSON string into an object
                $obj = json_decode($json);
                // In the case of this input, do key and array lookups to get the values
                foreach ($obj->data as $key => $value) {
                    $url ="";
                    $link = "";
                    $i = $key;

                    if(empty($value->attributes->link_pange)){
                        $link = '#';
                    }else{
                        $link = $value->attributes->link_pange;                        
                    }
                    foreach($value->attributes->imagen as $item){

                            if(empty($item->attributes->formats->thumbnail)){
                                $url = 'http://178.62.220.4:1337'.$item->attributes->url;
                            }else{
                                $url = 'http://178.62.220.4:1337'.$item->attributes->formats->thumbnail->url;                               
                            }
                    }       
                   echo '<div class="col-sm-6 col-lg-3"><a class="box-sponsor wow fadeInUp" target="_blank" href="'.$link.'" data-wow-delay="1.'.$i.'s"><img src="'.$url.'" alt="" width="120" height="119"/></a></div>';
                }           
        ?>

    </div>
    </div>
</section>