
<div class="wrapper">
    <div class="navigation">
        <div class="container">
            <header class="navbar" id="top" role="banner">
                <div class="navbar-header">
                    <!--<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">-->
                        <!--<span class="sr-only">Toggle navigation</span>-->
                        <!--<span class="icon-bar"></span>-->
                        <!--<span class="icon-bar"></span>-->
                        <!--<span class="icon-bar"></span>-->
                    <!--</button>-->
                    <div class="navbar-brand nav" id="brand">
                        <?= $this->Html->image('logo.png', ['url' => '/']); ?>
                    </div>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="active has-child"><?= $this->Html->link('Accueil','/'); ?>
                            <ul class="child-navigation">

                            </ul>
                        </li>
                        <li class="has-child"><?= $this->Html->link('Liste des offres','/offres'); ?>
                            <ul class="child-navigation">

                            </ul>
                        </li>
                        <li class="has-child"><?= $this->Html->link('Ajouter une offre','/deposer'); ?>
                            <ul class="child-navigation">

                            </ul>
                        </li>
                        <li class="has-child"><?= $this->Html->link('Partenaires','/partenaires'); ?>
                            <ul class="child-navigation">

                            </ul>
                        </li>
                        <li class="has-child"><?= $this->Html->link('Espace membre','/mon-espace'); ?>
                            <?php  if (is_null($this->request->session()->read('Auth.User.username'))){
                            echo"<ul class='child-navigation'><li>".
                            $this->Html->link('Se connecter','/Users/login')."
 </li><li>
                            ".$this->Html->link('inscription','/partenaires/add')." </li></ul>";
                    }
                            else {
                            echo"<ul class='child-navigation'>
                                <li> ".$this->Html->link('Mon Profil','/mon-espace')." </li>
                                <li> ".$this->Html->link('Mes annonces','/mes-annonces')." </li>
                                <li>
                                ".$this->Html->link('Deconnexion','/Users/logout')." </li></ul>";
                            }
                    ?>

                        </li>
                        <li class="has-child"><?= $this->Html->link('Contact','/nous-contacter'); ?>
                            <ul class="child-navigation"></ul>

                        </li>
                </nav>
            </header>
        </div>
    </div>
</div>