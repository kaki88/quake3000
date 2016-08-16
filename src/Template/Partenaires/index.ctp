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
        <div class="container">
            <div class="row">
                <!-- Agent Detail -->
                <div class="col-md-9- col-sm-9">
                    <section id="agents-listing">
                        <header><h1>Liste des partenaires</h1></header>
                        <div class="row">
         
<?php
foreach($query as $uti){
$modif = str_replace(' ', '-', $uti->company_name);
echo '<div class="col-md-12 col-lg-6">
<div class="agent"><a href="agent-detail.html" class="agent-image"><img alt="" src="assets/img/client-01.jpg"></a>
<div class="wrapper"><header><a href="agent-detail.html">'; 
?>

<h2><a href='#'><?= $uti->first_name.' '.$uti->last_name; ?></h2></a></header>
<aside>(nombre) propriétées de l offre</aside>
<dl>
<dt>Téléphonne:</dt>
<dd><?= $uti->phone; ?></dd>
<dt>Compagnie:</dt>
<dd><?= $uti->company_name ;?></dd>
<dt>Email:</dt>
<dd><?= $uti->email; ?></dd>
<dt>Visiter le profil</dt>
<dd><?= $this->Html->link('Voir profil','/partenaires/'.$modif.'') ;?></dd>

</dl>
</dl></div></div><!-- /.agent --></div><!-- /.col-md-12 -->

<?php  } ;  ?>
</div><!-- /.row -->
</section><!-- /#agents-listing -->




<?php 
/*
foreach ($query as $uti) {
$modif = str_replace(' ', '-', $uti->company_name);
echo '<tr><td>'.$uti->first_name.'</td><td>'.$uti->last_name.'</td><td>'.$uti->company_name.'</td>
    <td> '. $this->Html->link('Voir profil','partenaires/'.$modif.'') .' </td>
    </tr>
    ';}
*/
    ?>

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
                </div><!-- /.col-md-9 -->
                <!-- end Agent Detail -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
