
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
                <!-- Search Box -->
                <div class="">
                    <?php echo $this->Form->create('Post',array('id' => 'form-map' , 'class' => 'form-map form-search' , 'type' => 'get','url' => array('controller' => 'offres', 'action' => 'results'))); ?>
                    <h2>Rechercher un bien</h2>
                    <div class="search-box-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="">


                                        <div class="form-group">
                                            <input name="city" type="text" class="form-control" id="search-box-property-id" placeholder="Ville">
                                        </div>
                                        <div class="form-group">
                                            <input name="zipcode" type="text" class="form-control" id="search-box-property-idd" placeholder="Code postal">
                                        </div>
                                    </div></div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="">
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
<label>Date de parution</label>
                                            <select name="sorting" id="sorting">
                                                <option value="">Trier par</option>
                                                <option value="?sort=asc" <?php if(isset($this->request->query['sort']) && $sort == 'desc') echo "selected" ?>>Les plus récentes</option>
                                                <option value="?sort=desc" <?php if(isset($this->request->query['sort']) && $sort == 'asc') echo "selected" ?>>Les plus anciennes</option>
                                            </select>
                                        </div><!-- /.form-group -->

                                            <div class="form-group">
                                                <label>Surface</label>
                                                <select name="surface" id="surface">
                                                    <option value="">Trier par</option>
                                                    <option value="?surface=asc" <?php if(isset($this->request->query['surface']) && $surface == 'asc') echo "selected" ?>>Les plus petites</option>
                                                    <option value="?surface=desc" <?php if(isset($this->request->query['surface']) && $surface == 'desc') echo "selected" ?>>Les plus grandes</option>
                                                </select>
                                            </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label>Prix</label>
                                            <select name="surface" id="prix">
                                                <option value="">Trier par</option>
                                                <option value="?prix=asc"  <?php if(isset($this->request->query['prix']) && $prix == 'asc') echo "selected" ?>>Les moins chers</option>
                                                <option value="?prix=desc" <?php if(isset($this->request->query['prix']) && $prix == 'desc') echo "selected" ?>>Les plus chers</option>
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

   <script type="text/javascript" src="../js/jquery-2.1.0.min.js"></script>
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
       jQuery(function () {
           jQuery("#sorting").change(function () {
               location.href = jQuery(this).val();
           })
       })
       jQuery(function () {
           jQuery("#surface").change(function () {
               location.href = jQuery(this).val();
           })
       })
       jQuery(function () {
           jQuery("#prix").change(function () {
               location.href = jQuery(this).val();
           })
       })
   </script>
