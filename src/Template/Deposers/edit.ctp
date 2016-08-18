
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
            <header><h1>Editer une offre</h1></header>
            <?= $this->Form->create($article, ['url' => ['action' => 'edit'], 'enctype' => 'multipart/form-data']); ?>
            <div class="row">
                <div class="block">
                    <div class="col-md-12 col-sm-12">

                            <section id="basic-information">
                                <header><h2>Informations basiques</h2></header>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <?= $this->Form->input('type_ad_id', ['options' => $typeAds  , 'label' => 'Type de bien']); ?>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="col-md-3">
                                        <label for="submit-location">Type doffre</label>
                                        <div class="form-group">
                                            <?=              $this->Form->input('for_sale', ['label' => 'A vendre']);
                                            ?>
                                            <?=   $this->Form->input('for_rent', ['label' => 'A louer']); ?>

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

                                                <?= $this->Form->input('city',['label' => 'Ville' , 'type' => 'hidden']); ?>

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

                                                <?= $this->Form->input('is_divisible',['label' => 'cocher si oui']); ?>

                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>






                                </div>
                                <div class="form-group">
                                    <label for="submit-description">Description</label>
                                    <textarea class="form-control" id="submit-description" rows="8" name="description" required><?= $article->description ?> </textarea>
                                </div><!-- /.form-group -->
                            </section><!-- /#basic-information -->



                            <input type="hidden" name="latitude" id="latitude" value="<?= $article->latitude ?>">

                            <input type="hidden" name="longitude" id="longitude" value="<?= $article->longitude ?>">



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
        $.get("../city.txt", function(data) {
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






