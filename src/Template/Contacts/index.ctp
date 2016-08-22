



    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <!-- Contact -->
                <div class="col-md-12 col-sm-12">
                    <section id="agent-detail">
                        <header><h1>Contactez nous</h1></header>
                        <section id="contact-information">
                            <div class="row">
                                <div class="col-md-4 col-sm-5">
                                    <section id="address">
                                        <header><h3>Adresse</h3></header>
                                        <address>
                                            <strong>CCI Epinal</strong><br>
                                            Rue d'Epinal<br>
                                            Epinal, 88000
                                        </address>
                                        03 29 00 00 00<br>
                                        <a href="#">contact@epinal.fr</a><br>
                                    </section><!-- /#address -->
                                    <section id="social">
                                        <header><h3>Reseaux sociaux</h3></header>
                                        <div class="agent-social">
                                            <a href="#" class="fa fa-twitter btn btn-grey-dark"></a>
                                            <a href="#" class="fa fa-facebook btn btn-grey-dark"></a>
                                            <a href="#" class="fa fa-linkedin btn btn-grey-dark"></a>
                                        </div>
                                    </section><!-- /#social -->
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-8 col-sm-7">
                                    <header><h3>Nous sommes ici !</h3></header>
                                    <div id="contact-map">
                                        <div id="map" style="height: 200px;" class="map-up"></div>
                                    </div>

                                </div><!-- /.col-md-8 -->
                            </div><!-- /.row -->
                        </section><!-- /#agent-info -->
                        <hr class="thick">
                    </section><!-- /#agent-detail -->
                </div><!-- /.col-md-9 -->
                <!-- sidebar -->
                <!-- end Sidebar -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->









    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6Zs1p5MxC9bnpOoJHyKwR6lTta1Q6Qs8&signed_in=true&callback=initMap"></script>

    <script>
        function initMap() {
            var myLatLng = {lat:  48.87, lng: 5.29};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 7,
                scrollwheel: false,
                center: {lat: 48.354878, lng: 5.692662}
            });
            var marker = new google.maps.Marker({
                map: map,
                position: myLatLng,
                title: 'Hello World!'
            });

            }
</script>
