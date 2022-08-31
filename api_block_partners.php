<section class="section-lg text-center">
    <div class="container">
        <div class="wow-outer">
        <div class="wow slideInDown">
            <h3>Algunos de Nuestros Partners</h3>
        </div>
        </div>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-dots-secondary dots-offset-lg" data-items="1" data-sm-items="2" data-dots-each="2" data-lg-items="4" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="30" data-mouse-drag="false">
        <?php      
            $curl = curl_init(); //Initializes curl
            curl_setopt($curl, CURLOPT_URL, 'http://localhost:1337/api/partners?populate=imagen');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json'
            ]); // Sets header information for authenticated requests

            $res = curl_exec($curl);
            curl_close($curl);

            $obj = json_decode($res);
            //print_r($res);

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
                            $url = 'http://localhost:1337'.$item->attributes->url;
                        }else{
                            $url = 'http://localhost:1337'.$item->attributes->formats->thumbnail->url;                               
                        }
                }       
                echo '<a class="box-sponsor box-sponsor-modern wow-outer" href="'.$link.'" target="_blank">            
                        <div class="wow fadeInUp">
                            <img src="'.$url.'" alt="" width="270" height="121"/>
                        </div>
                    </a>';
            } 
        ?>
        </div>
    </div>
</section>

