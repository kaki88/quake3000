
<body class="page-sub-page page-submit" id="page-top">
<!-- Wrapper -->
<div class="wrapper">
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Déposer votre offre</h1></header>
            <?= $this->Form->create(null, ['url' => ['action' => 'submit'], 'enctype' => 'multipart/form-data']); ?>
                <div class="row">
                    <div class="block">
                        <div class="col-md-12 col-sm-12">
                            <section id="submit-form">
                                <section id="basic-information">
                                    <header><h2>Informations basiques</h2></header>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <?= $this->Form->input('type_ad_id', ['options' => $ads , 'label' => 'Type de bien']); ?>
                                            </div><!-- /.form-group -->
                                        </div>
                                        <div class="col-md-3">
                                            <label for="submit-location">Type doffre</label>
                                            <div class="form-group">
                                                <select name="select">
                                                    <option value="1">Vente</option>
                                                    <option value="2" >Location</option>
                                                    <option value="3">En vente ou en location</option>
                                                </select>
                                            </div><!-- /.form-group -->
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">

                                                <div class="input-group">

                                                    <?= $this->Form->input('price',['label' => 'Prix']); ?>

                                                </div>
                                            </div><!-- /.form-group -->
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">

                                                <div class="input-group">

                                                    <?= $this->Form->input('price_info',['label' => 'Complément d\'information']); ?>

                                                </div>
                                            </div><!-- /.form-group -->
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">

                                                <div class="input-group">

                                                    <?= $this->Form->input('city',['label' => 'Ville']); ?>

                                                </div>
                                            </div><!-- /.form-group -->
                                        </div>




                                        <div class="col-md-3">
                                            <div class="form-group">

                                                <div class="input-group">

                                                    <?= $this->Form->input('surface',['label' => 'Surface']); ?>

                                                </div>
                                            </div><!-- /.form-group -->
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="submit-location">Surface divisible</label>
                                                <div class="input-group">

                                                    <select name="is_divisible">
                                                        <option value="0">Non</option>
                                                        <option value="1" >Oui</option>
                                                    </select>

                                                </div>
                                            </div><!-- /.form-group -->
                                        </div>






                                    </div>
                                    <div class="form-group">
                                        <label for="submit-description">Description</label>
                                        <textarea class="form-control" id="submit-description" rows="8" name="description" required></textarea>
                                    </div><!-- /.form-group -->
                                </section><!-- /#basic-information -->



 <input type="hidden" name="latitude" id="latitude">

                                <input type="hidden" name="longitude" id="longitude">

                                <section class="block" id="gallery">
                                    <header><h2>Télécharger des images.</h2></header>
                                    <div class="center">
                                        <div class="form-group">
                                            <input id="file-upload" name="newsImage[]" type="file" class="file"
                                                   multiple="true" data-show-upload="false" data-show-caption="false"
                                                   data-show-remove="false" accept="image/jpeg,image/png"
                                                   data-browse-class="btn btn-default"
                                                   data-browse-label="Parcourir les fichiers">
                                            <figure class="note"><strong>Indice:</strong> Vous pouvez télécharger tous les fichiers en une seule fois!</figure>
                                        </div>
                                    </div>
                                </section>

                                <hr>
                            </section>
                        </div><!-- /.col-md-9 -->
                    </div>
                </div><!-- /.row -->
            <?= $this->Form->button(__('Valider')) ?>
            <?= $this->Form->end() ?>



        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
    <!-- Page Footer -->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

    <script>

        var availableTags;
        $.get("city.txt", function(data) {
            availableTags = data.split(',');
            $("[name=city]").autocomplete({source:availableTags})

            });
    </script>











    <script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApVM7J1ORsEb8cGHsa_Ma3SoU8GLK8wfk&signed_in=true&libraries=places"
            async defer></script>

    <script type="text/javascript" src="../js/markerwithlabel_packed.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../js/icheck.min.js"></script>
    <script type="text/javascript" src="../js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="../js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="../js/fileinput.min.js"></script>
    <script type="text/javascript" src="../js/custom-map.js"></script>
    <script type="text/javascript" src="../js/custom.js"></script>


    <script>



        function showResult(result) {
            document.getElementById('latitude').value = result.geometry.location.lat();
            document.getElementById('longitude').value = result.geometry.location.lng();
        }

        function getLatitudeLongitude(callback, address) {
            address = address ;
            geocoder = new google.maps.Geocoder();
            if (geocoder) {
                geocoder.geocode({
                    'address': address
                }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        callback(results[0]);
                    }
                });
            }
        }
        document.addEventListener("click", function () {
            var city = document.getElementById('city').value;
            var address = city + ' france';

            getLatitudeLongitude(showResult, address)
        });


    </script>



