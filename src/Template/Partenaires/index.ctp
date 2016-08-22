<!-- Page Content -->
<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Acceuil</a></li>
            <li><a href="#">Partenaires</a></li>
            <li class="active">Liste des partenaires</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->
    <div class="container ">
        <div class="row">
            <!-- Agent Detail -->
            <div class="col-md-9- col-sm-9 ">
                <section id="agents-listing">
                    <header><h1>Liste des partenaires</h1></header>
                    <div class="row">

                        <?php
                        foreach($query as $uti){
                        $modif = str_replace(' ', '-', $uti->company_name);
                        echo '<div class="col-md-12 col-lg-6">
<div class="agent"><a href="agent-detail.html" class="agent-image"><img alt="" src="assets/img/client-01.jpg"></a>
<div class="wrapper"><header>';
                        ?>

                        <h2><?= $uti->first_name.' '.$uti->last_name; ?></h2></header>
                        <aside>Propriétées de l'offre :</aside>
                        <dl>

                            <?php if(!empty($uti->phone)){
                                echo "<dt>Téléphone:</dt>
<dd>$uti->phone</dd>";
                            }else{
                                echo "<br>";

                            }?>
                            <?php if(!empty($uti->company_name)){
                                echo "<dt>Compagnie:</dt>
<dd>$uti->company_name</dd>";
                            }else{
                                echo "<br>";

                            }?>

                            <?php
                            if($uti->is_hidden== 1){
                                echo "<dt>Email:</dt>
<dd>$uti->email</dd>";
                            }else{
                                echo "<br>";
                            }
                            ?>
                            <?php if(!empty($uti->description)){
                                echo"<dt>Description:</dt><dd>$uti->description</dd>
                            ";
                            } else{
                                echo "";
                            }
                            ?>

                        </dl>
                        </dl></div></div><!-- /.agent --></div><!-- /.col-md-12 -->

        <?php  } ;  ?>
    </div><!-- /.row -->
    </section><!-- /#agents-listing -->

    <!-- Pagination -->
    <div class="center">
        <ul class="pagination">


            <?= $this->Paginator->numbers() ?>


        </ul><!-- /.pagination-->
    </div><!-- /.center-->
</div><!-- /.col-md-9 -->
<!-- end Agent Detail -->
</div><!-- /.row -->
</div><!-- /.container -->
</div>
<!-- end Page Content -->
