
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





                    </div><!-- /.col-md-3 -->
                    <div class="col-md-12 col-sm-12">
                        <section id="results">
                            <header><h1>Liste des biens</h1></header>
                            <section id="search-filter">
                                <figure><h3><i class="fa fa-search"></i>Resultats:</h3>
                                    <span class="search-count"><?= $number ?>  </span>
                                    <figure><h3><i class="fa fa-file-text"></i>Page(s):</h3>
                                        <span class="search-count"><?= $this->Paginator->counter() ?> </span>
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
foreach  ($ads as $ad){
                $tow = $ad->town;
                $type = $ad->type_ad;
                                    if ($ad->images){
                                    $image = $ad->images[0];
                                    }
                                    else {
                                    $image = '';
                                    }

echo "
    <div class='col-md-4 col-sm-4'>
      <div class='property'>
         <a href='fiches/$ad->id'>
             <div class='property-image'>";
                 if ($image){
                 echo "<img alt='' height='200' src='../files/$ad->id&$image->id.png '>";
                 }
                 else {
                 echo "<img alt='' height='200'  src='../files/default.png '>";
                 }

                 echo "
             </div>
            <div class='overlay'>
                <div class='info'>
                    <div class='tag price'>".$ad->price."€
                    </div>
                    <h3>".$type->type_name."</h3>
                    <figure>".$tow->town_zip_code."&nbsp".$tow->town_name."</figure>
                </div>
                <ul class='additional-info'>

                    <li><header>Surface :</header>
                        <figure>$ad->surface<sup>2</sup></figure>
                    </li>

                    <li><header>Divisible:</header>";
                        if($ad->is_divisible == 1){
                        echo "<figure>Oui</figure>";
                        }else {
                        echo " <figure>Non</figure>";
                        }
                    echo"</li>

                    <li><header>A vendre :</header>";
                        if($ad->for_sale == 1){
                        echo "<figure>Oui</figure>";
                        }else {
                        echo " <figure>Non</figure>";
                        }
                    echo"</li>

                    <li><header>A louer :</header>";
                    if($ad->for_rent == 1){
                    echo "<figure>Oui</figure>";
                    }else {
                    echo "<figure>Non</figure>";
                    }
                    echo"</li>

                </ul>
            </div>
        </a>
      </div><!-- /.property -->
    </div><!-- /.col-md-4 -->";
};  ?>

                                </div><!-- /.row-->
                                <!-- Pagination -->
                                <div class="center">
                                    <ul class="pagination">


                                <?= $this->Paginator->numbers() ?>


                                    </ul><!-- /.pagination-->
                                </div><!-- /.center-->

                                <!--<?= $this->Paginator->prev('<< Precedant') ?>-->
                                <!--<?= $this->Paginator->next('Suivant >>') ?>-->
                                <!--<?= $this->Paginator->counter() ?>-->

                            </section><!-- /#properties-->
                        </section><!-- /#results -->
                    </div><!-- /.col-md-9 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
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

