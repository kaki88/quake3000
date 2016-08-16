<div class="container">
    <div class="geo-location-wrapper">
        <span class="btn geo-location"><i class="fa fa-map-marker"></i><span class="text">Find My Position</span></span>
    </div>
</div>

<!-- Map -->
<div id="map" class="has-parallax"></div>
<!-- end Map -->

<!-- Search Box -->
<div class="search-box-wrapper">
    <div class="search-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="search-box map">
                        <form role="form" id="form-map" class="form-map form-search">
                            <h2>Rechercher un bien</h2>
                            <div class="form-group">
                                <input name="city" type="text" class="form-control" id="search-box-property-id" placeholder="Ville">
                            </div>
                            <div class="form-group">
                                <input name="zipcode" type="text" class="form-control" id="search-box-property-idd" placeholder="Code postal">
                            </div>
                            <div class="form-group">
                                <select name="typeoffre">
                                    <option value="">Type d'offre</option>
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
                                <?= $this->Form->input('Departement', ['options' => $query]); ?>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="district">
                                    <option value="">District</option>
                                    <option value="1">Manhattan</option>
                                    <option value="2">The Bronx</option>
                                    <option value="3">Brooklyn</option>
                                    <option value="4">Queens</option>
                                    <option value="5">Staten Island</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="property-type">
                                    <option value="">Property Type</option>
                                    <option value="1">Apartment</option>
                                    <option value="2">Condominium</option>
                                    <option value="3">Cottage</option>
                                    <option value="4">Flat</option>
                                    <option value="5">House</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <div class="price-range">
                                    <input id="price-input" type="text" name="price" value="1000;299000">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Search Now</button>
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
                $image = $ad->images[0];
                echo "

                <div class='col-md-3 col-sm-6'>
                    <div class='property'>
                        <a href='fiches/$ad->id'>
                            <div class='property-image'>
                                <img alt='' src='../files/$ad->id&$image->id.png '>

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApVM7J1ORsEb8cGHsa_Ma3SoU8GLK8wfk&signed_in=true&libraries=places&callback=initAutocomplete&region=fr"
        async defer></script>


<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="../js/infobox.js"></script>
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
<script type="text/javascript" src="../js/custom-map.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>


<script>
    _latitude = 48.87;
    _longitude = 2.29;
    createHomepageGoogleMap(_latitude,_longitude);
    $(window).load(function(){
        initializeOwl(false);
    });
</script>