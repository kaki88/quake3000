<div class="container">
    <!--<div class="geo-location-wrapper">-->
        <!--<span class="btn geo-location"><i class="fa fa-map-marker"></i><span class="text">Trouver Ma Position</span></span>-->
    <!--</div>-->
</div>

<!-- Map -->
<div id="map" class="map-up"></div>
<!-- end Map -->

<!-- Search Box -->
<div class="search-box-wrapper">
    <div class="search-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="search-box map">




                            <?php echo $this->Form->create('Post',array('id' => 'form-map' , 'class' => 'form-map form-search' , 'type' => 'get','url' => array('controller' => 'offres', 'action' => 'results'))); ?>
                            <h2>Rechercher un bien</h2>
                            <div class="form-group">
                                <input name="city" type="text" class="form-control" id="search-box-property-id" placeholder="Ville">
                            </div>
                            <div class="form-group">
                                <input name="zipcode" type="text" class="form-control" id="search-box-property-idd" placeholder="Code postal">
                            </div>
                            <div class="form-group">
                                <select name="typeoffre">
                                    <option value="0">Type d'offre</option>
                                    <option value="1">Location</option>
                                    <option value="2">Vente</option>
                                    <option value="3">Location ou Vente</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="typebien">
                                    <option value="">Type de bien</option>
                                    <option value="1">Bureau</option>
                                    <option value="2">Commerce</option>
                                    <option value="3">Entrepôt</option>
                                    <option value="4">Industrie</option>
                                    <option value="5">Terrain</option>
                                </select>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <div class="price-range">
                                    <input id="price-input" type="text" name="surface" value="0;9900">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Rechercher</button>
                            </div><!-- /.form-group -->
                        </form><!-- /#form-map -->
                    </div><!-- /.search-box.map -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.search-box-inner -->
</div>
<!-- end Search Box -->

<!-- Page Content -->
<div id="page-content">
    <!-- /#banner -->
    <section id="our-services" class="block">
        <div class="container">
            <header class="section-title"><h2>Vous souhaitez...</h2></header>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="feature-box equal-height">
                        <figure class="icon"><i class="fa fa-folder"></i></figure>
                        <aside class="description">
                            <header><h3>Acheter</h3></header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <a href="properties-listing.html" class="link-arrow">Afficher plus</a>
                        </aside>
                    </div><!-- /.feature-box -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-4">
                    <div class="feature-box equal-height">
                        <figure class="icon"><i class="fa fa-users"></i></figure>
                        <aside class="description">
                            <header><h3>Vendre</h3></header>
                            <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
                            <a href="agents-listing.html" class="link-arrow">Afficher plus</a>
                        </aside>
                    </div><!-- /.feature-box -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-4">
                    <div class="feature-box equal-height">
                        <figure class="icon"><i class="fa fa-money"></i></figure>
                        <aside class="description">
                            <header><h3>Louer</h3></header>
                            <p>Phasellus non viverra tortor, id auctor leo. Suspendisse id nibh placerat</p>
                            <a href="#" class="link-arrow">Afficher plus</a>
                        </aside>
                    </div><!-- /.feature-box -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /#our-services -->
    <section id="price-drop" class="block">
        <div class="container">
            <header class="section-title">
                <h2>Dernières annonces en ligne</h2>
                <a href="offres" class="link-arrow">Toutes les annonces</a>
            </header>
            <div class="row">

                <?php foreach  ($ads as $ad){
                $tow = $ad->town;
                $type = $ad->type_ad;
                if ($ad->images){
                $image = $ad->images[0];
                }
                else {
                $image = '';
                }
                echo "

                <div class='col-md-3 col-sm-6'>
                    <div class='property'>
                        <a href='fiches/$ad->id'>
                            <div class='property-image'>";
                                if ($image){
                                echo "<img alt='' height='150' src='../files/$ad->id&$image->id.png '>";
                                }
                                else {
                                echo "<img alt='' height='150'  src='../files/default.png '>";
                                }

echo "
                            </div>
                            <div class='overlay'>
                                <div class='info'>
                                    <div class='tag price'>$ad->price €</div>
                                    <h3>$type->type_name</h3>
                                    <figure> $tow->town_zip_code, $tow->town_name</figure>

                                </div>
                                <ul class='additional-info'>
                                    <li>
                                        <header>Surface :</header>
                                        <figure>$ad->surface<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Divisible:</header>
                                        ";
                                        if($ad->is_divisible == 1){
                                        echo "
                                        <figure>Oui</figure>
                                        ";
                                        }
                                        else {
                                        echo "
                                        <figure>Non</figure>
                                        ";
                                        }
                                        echo"
                                    </li>
                                    <li>
                                        <header>A vendre :</header>
                                        ";
                                        if($ad->for_sale == 1){
                                        echo "
                                        <figure>Oui</figure>
                                        ";
                                        }
                                        else {
                                        echo "
                                        <figure>Non</figure>
                                        ";
                                        }
                                        echo"
                                    </li>
                                    <li>
                                        <header>A louer :</header>
                                        ";
                                        if($ad->for_rent == 1){
                                        echo "
                                        <figure>Oui</figure>
                                        ";
                                        }
                                        else {
                                        echo "
                                        <figure>Non</figure>
                                        ";
                                        }
                                        echo"
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                ";
                }
                ?>





            </div><!-- /.row-->
        </div><!-- /.container -->

    </section><!-- /#price-drop -->
    <!-- /#adveritsing-->
    <!-- /#new-properties-->
    <!-- /#testimonials -->
    <!-- /#partners -->
</div>
<script type="text/javascript" src="../js/jquery-2.1.0.min.js"></script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6Zs1p5MxC9bnpOoJHyKwR6lTta1Q6Qs8&signed_in=true&callback=initMap"></script>




<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="../js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/jquery.placeholder.js"></script>
<script type="text/javascript" src="../js/icheck.min.js"></script>
<script type="text/javascript" src="../js/jquery.vanillabox-0.1.5.min.js"></script>
<script type="text/javascript" src="../js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="../js/jshashtable-2.1_src.js"></script>
<script type="text/javascript" src="../js/jquery.numberformatter-1.2.3.js"></script>
<script type="text/javascript" src="../js/tmpl.js"></script>
<script type="text/javascript" src="../js/jquery.dependClass-0.1.js"></script>
<script type="text/javascript" src="../js/draggable-0.1.js"></script>
<script type="text/javascript" src="../js/jquery.slider.js"></script>
<script type="text/javascript" src="../js/markerclusterer_packed.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>


<script>
    function initMap() {
    <?php
                $i = 0;
     foreach  ($markers as $row){
            if(!empty($row->latitude)){
                $i++;
                echo "var myLatLng$i = {lat:  $row->latitude , lng: $row->longitude } ;";
            }
        }
        ?>
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: {lat: 48.354878, lng: 5.692662}
        });

    <?php
                $y = 0;
        foreach  ($markers as $marker){
            if(!empty($marker->latitude)){
if ($marker->for_sale == 1 && $marker->for_rent == 0 ){
    $typedevente = "en vente";
    }
                if ($marker->for_sale == 0 && $marker->for_rent == 1 ){
                    $typedevente = "en location";
                }
                if ($marker->for_sale == 1 && $marker->for_rent == 1 ){
                    $typedevente = "en location/vente";
                }
                $town = $marker->town;
                $typ = $marker->type_ad;
                $y++;
                echo "
                var marker$y = new google.maps.Marker({
                    position: myLatLng$y,
                    map: map,
                    title: '$typ->type_name $typedevente à $town->town_name ',
                    url: 'http://www.google.com',
                });
                google.maps.event.addListener(marker$y, 'click', function () {
                    window.location.href = 'fiches/$marker->id';
                });
                ";
            }
        }
        ?>

    }
    $('.geo-location').on("click", function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(success);
        } else {
            error('Geo Location is not supported');
        }
    });

    function success(position) {


        var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

        var options = {
            zoom: 15,
            center: coords,
            mapTypeControl: false,
            navigationControlOptions: {
                style: google.maps.NavigationControlStyle.SMALL
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map"), options);


    }


</script>
