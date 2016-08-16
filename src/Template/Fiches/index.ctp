
<br/><br/><br/><br/><br/>
<div class="container">

    <div class="row">

        <!-- commerce thaon -->
        <div class="col-md-8 col-sm-8">

            <section id="property-detail">
                <header class="property-title">

                    <!--Un titre est composé d'un type de bien + une ville-->

                    <h1><?= $offers->type_ad->type_name.' '.$type ?>
                        <?php

                        ?></h1>
                    <figure><?= $offers->town->town_zip_code.' '.$offers->town->town_name ?></figure>

                </header>
                <section id="property-gallery">
                    <div class="owl-carousel property-carousel">


<?php foreach  ($imgs as $image){
echo "
 <div class='property-slide'>
                        <a href='../files/$image->ad_id&$image->id.png' class='image-popup'>
                            <div class='overlay'><h3>Front View</h3></div>
                            <img src='../files/$image->ad_id&$image->id.png'>
                        </a>
                    </div>
";
}
?>



                    </div><!-- /.property-carousel -->
                </section>
            </section><!-- /#property-detail -->
        </div>

        <!--resumé -->
        <div class="col-md-4 col-sm-12">
            <section id="quick-summary" class="clearfix">
                <header><h2>Resumé</h2></header>
                <dl>
                    <dt>Mis en ligne le:</dt>
                    <dd><?= $offers->created->i18nformat('EEEE dd MMMM YYYY')


                        ?></dd>
                    <dt>Localisation</dt>
                    <dd><?= $offers->town->town_name ?></dd>
                    <dt>Departement:</dt>
                    <dd><?= $offers->town->area->area?></dd>
                    <dt>Prix</dt>
                    <dd><span class="tag price"><?= $offers->price ?> €</span></dd>
                    <dt>Type de bien:</dt>
                    <dd><?= $offers->type_ad->type_name ?></dd>
                    <dt>Type de transaction:</dt>
                    <dd><?= $type ?></dd>
                    <dt>Surface:</dt>
                    <dd><?= $offers->surface ?> m<sup>2</sup></dd>

                    <dt>Divisible:</dt>
                    <dd><?= $div ?></dd>



                </dl>
            </section><!-- /#quick-summary -->
        </div><!-- /.col-md-4 -->
    </div><!-- /.row -->

    <div class="row">


        <!--description du bien-->
        <div class="col-md-8 col-sm-8">
            <section id="description">
                <header><h2>Description du bien</h2></header>
                <p>
                    <?= $offers->description ?>
                </p>
            </section><!-- /#description -->
        </div>
    </div>

    <div class="row">

        <div class="row">
            <!--informations commercialisateur-->
            <div class="col-md-12 col-sm-12">
                <section id="contact-agent">
                    <header><h2>Informations commercialisateur</h2></header>
                    <div class="row">
                        <section class="agent-form">
                            <div class="col-md-7 col-sm-12">
                                <aside class="agent-info clearfix">
                                    <figure><img alt="" src="<?= $this->Url->image('agent-01.jpg'); ?>"></figure>
                                    <div class="agent-contact-info">
                                        <h3> <?= $offers->user->first_name.' '.$offers->user->last_name.', '.$offers->user->type_user->type_user_name          ?></h3>

                                        <dl>
                                            <dt>Adresse:</dt>
                                            <dd><?= $offers->user->address ?></dd>
                                            <dt>Ville:</dt>
                                            <dd><?= $offers->user->city ?></dd>
                                            <dt>Telephone:</dt>
                                            <dd><?= $offers->user->phone ?></dd>
                                            <dt>Site web:</dt>
                                            <dd><a><?= $offers->user->website_link ?></a></dd>
                                            <dt>Email:</dt>
                                            <dd><a href="mailto:#"><?= $offers->user->email ?></a></dd>

                                        </dl>

                                    </div>
                                </aside><!-- /.agent-info -->
                            </div><!-- /.col-md-7 -->
                            <div class="col-md-5 col-sm-12">
                                <div class="agent-form">
                                    <form role="form" id="form-contact-agent" method="post"  class="clearfix">
                                        <div class="form-group">
                                            <label for="form-contact-agent-name">Votre Nom<em>*</em></label>
                                            <input type="text" class="form-control" id="form-contact-agent-name" name="form-contact-agent-name" required>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="form-contact-agent-email">Votre  Email<em>*</em></label>
                                            <input type="email" class="form-control" id="form-contact-agent-email" name="form-contact-agent-email" required>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="form-contact-agent-message">Votre Message<em>*</em></label>
                                            <textarea class="form-control" id="form-contact-agent-message" rows="2" name="form-contact-agent-message" required></textarea>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <button type="submit" class="btn pull-right btn-default" id="form-contact-agent-submit">Envoyer le Message</button>
                                        </div><!-- /.form-group -->
                                        <div id="form-contact-agent-status"></div>
                                    </form><!-- /#form-contact -->
                                </div><!-- /.agent-form -->
                            </div><!-- /.col-md-5 -->
                        </section><!-- /.agent-form -->
                    </div><!-- /.row -->
                </section><!-- /#contact-agent -->


            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="../js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="../js/infobox.js"></script>
<script type="text/javascript" src="../js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/jquery.placeholder.js"></script>
<script type="text/javascript" src="../js/icheck.min.js"></script>
<script type="text/javascript" src="../js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="../js/jquery.raty.min.js"></script>
<script type="text/javascript" src="../js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="../js/jshashtable-2.1_src.js"></script>
<script type="text/javascript" src="../js/jquery.numberformatter-1.2.3.js"></script>
<script type="text/javascript" src="../js/tmpl.js"></script>
<script type="text/javascript" src="../js/jquery.dependClass-0.1.js"></script>
<script type="text/javascript" src="../js/draggable-0.1.js"></script>
<script type="text/javascript" src="../js/jquery.slider.js"></script>
<script type="text/javascript" src="../js/jquery.fitvids.js"></script>
<script type="text/javascript" src="../js/custom-map.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>


<script type="text/javascript">
    $(window).load(function () {
        initializeOwl(false);
    });
</script>