<html>

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery.slider.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>Liste des biens</title>

</head>

<body class="page-sub-page page-listing-lines page-search-results" id="page-top" data-spy="scroll" data-target=".navigation" data-offset="90">
<!--wrapper -->
   <div class="wrapper">
        <div id="page-content">
            <!-- Breadcrumb -->
            <div class="container">
                <ol class="breadcrumb">
                </ol>
            </div>
            <!-- end Breadcrumb -->

            <style>
                .btn-group-vertical > button{
                    margin-bottom:10px;
                }
            </style>

            <div class="container">
                <div class="row">


                    <div class="col-md-3 col-sm-3">


                        <div class="btn-group-vertical">

                            <header><h3>Critères de recherche</h3></header>
                            <hr/>
                            <!--Les critères affichés dans ce cadre sont les critères que l'utilisateur a selectionnés-->

                            <button type="button" class="btn btn-default">
                                Test<span class="glyphicon glyphicon-remove"></span>
                            </button>
                            <button type="button" class="btn btn-default">
                                Test<span class="glyphicon glyphicon-remove"></span>
                            </button>
                            <button type="button" class="btn btn-default">
                                Test<span class="glyphicon glyphicon-remove"></span>
                            </button>
                            <button type="button" class="btn btn-default">
                                Test<span class="glyphicon glyphicon-remove"></span>
                            </button>
                            <button type="button" class="btn btn-default">
                                Test<span class="glyphicon glyphicon-remove"></span>
                            </button>
                            <button type="button" class="btn btn-default">
                                Test<span class="glyphicon glyphicon-remove"></span>
                            </button>
                        </div>

                    </div><!-- /.col-md-3 -->
                    <div class="col-md-9 col-sm-9">
                        <section id="results">
                            <header><h1>Liste des biens</h1></header>
                            <section id="search-filter">
                                <figure><h3><i class="fa fa-search"></i>Resultats:</h3>
                                    <span class="search-count">28</span>
                                    <div class="sorting">
                                        <div class="form-group">
                                            <select name="sorting">
                                                <option value="">Trier par</option>
                                                <option value="1">Ordre croissant</option>
                                                <option value="2">Ordre décroissant</option>
                                            </select>
                                        </div><!-- /.form-group -->
                                    </div>
                                </figure>
                            </section>
                            <section id="properties">
                                <div class="row">

<?php 
foreach($queryOffer as $offer){                              
echo '<div class="col-md-4 col-sm-4">
<div class="property equal-height">
<figure class="tag status">For Sale</figure>
<figure class="type" title="Apartment"><img src="assets/img/property-types/apartment.png" alt=""></figure>
<a href="property-detail.html">
<div class="property-image">';
echo $this->Html->image('logo.png', ['alt' => 'CakePHP']);
echo '</div> <div class="overlay"><div class="info">';
echo '<div class="tag price">'.$offer->price.'</div>';
echo '<h3>3398 Lodgeville Road</h3>
<figure>Golden Valley, MN 55427</figure></div>
<ul class="additional-info">
<li><header>Area:</header><figure>240m<sup>2</sup></figure></li>
<li><header>Beds:</header><figure>2</figure></li>
<li><header>Baths:</header><figure>2</figure></li>
<li><header>Garages:</header><figure>0</figure></li>
</ul></div></a>
</div><!-- /.property -->
</div><!-- /.col-md-3 -->';
};  ?>
                                               
                                </div><!-- /.row-->
                                <!-- Pagination -->
                                <div class="center">
                                    <ul class="pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul><!-- /.pagination-->
                                </div><!-- /.center-->

                            </section><!-- /#properties-->
                        </section><!-- /#results -->
                    </div><!-- /.col-md-9 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </div>


<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jshashtable-2.1_src.js"></script>
<script type="text/javascript" src="assets/js/jquery.numberformatter-1.2.3.js"></script>
<script type="text/javascript" src="assets/js/tmpl.js"></script>
<script type="text/javascript" src="assets/js/jquery.dependClass-0.1.js"></script>
<script type="text/javascript" src="assets/js/draggable-0.1.js"></script>
<script type="text/javascript" src="assets/js/jquery.slider.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->

