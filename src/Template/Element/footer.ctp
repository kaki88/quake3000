

<div class="wrapper">
    <footer id="page-footer">
        <div class="inner">
            <aside id="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <article>
                                <h3>A propos de nous</h3>
                                <p>Vel fermentum ipsum. Suspendisse quis molestie odio. Interdum et malesuada fames ac ante ipsum
                                    primis in faucibus. Quisque aliquet a metus in aliquet. Praesent ut turpis posuere, commodo odio
                                    id, ornare tortor
                                </p>

                            </article>
                        </div><!-- /.col-sm-3 -->

                        <div class="col-md-4 col-sm-4">
                            <article>
                                <h3>Contact</h3>
                                <address>
                                    <strong>CCI Epinal</strong><br>
                                    Rue d'Epinal<br>
                                    Epinal 88000
                                </address>
                                03 29 00 00 00 <br>
                                <a href="#">contact@epinal.fr</a>
                            </article>
                        </div><!-- /.col-sm-3 -->
                        <div class="col-md-4 col-sm-4">
                            <article>
                                <h3>Liens utiles</h3>
                                <ul class="list-unstyled list-links">
                                    <li><?= $this->Html->link('Mentions légales','/infos/mention'); ?></li>
                                    <li><?= $this->Html->link('Conditions Générales de Vente','/infos/cgv'); ?></li>
                                    <li><a href="#">Lien 3</a></li>
                                    <li><a href="#">Lien 4</a></li>
                                    <li><a href="#">Lien 5</a></li>
                                </ul>
                            </article>
                        </div><!-- /.col-sm-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </aside><!-- /#footer-main -->
            <aside id="footer-thumbnails" class="footer-thumbnails"></aside><!-- /#footer-thumbnails -->
            <aside id="footer-copyright">
                <div class="container">
                    <span>Copyright © 2016. Tous droits reservés.</span>
                    <span class="pull-right"><a href="#page-top" class="roll">Retour en haut</a></span>
                </div>
            </aside>
        </div><!-- /.inner -->
    </footer>
</div>









<!--<script async defer-->
        <!--src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6Zs1p5MxC9bnpOoJHyKwR6lTta1Q6Qs8&signed_in=true&callback=initMap"></script>-->

<script type="text/javascript">
//var propertyId = 0;
//google.maps.event.addDomListener(window, 'load', initMap(propertyId));
    $(window).load(function(){
        initializeOwl(false);
    });
