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
            <div class="row">
            <!-- sidebar -->
            <div class="col-md-3 col-sm-2">
                <section id="sidebar">
                    <header><h3>Mon compte</h3></header>
                    <aside>
                        <ul class="sidebar-navigation">
                            <li class="active"><a href="profile.html"><i class="fa fa-user"></i><span>Profil</span></a></li>
                            <li><a href="my-properties.html"><i class="fa fa-home"></i><span>Mes annonces</span></a></li>
                        </ul>
                    </aside>
                </section><!-- /#sidebar -->
            </div><!-- /.col-md-3 -->
            <!-- end Sidebar -->
                <!-- My Properties -->
                <div class="col-md-9 col-sm-10">
                    <section id="profile">
                        <header><h1>Profil</h1></header>
                        <div class="account-profile">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <img alt="" class="image" src="assets/img/agent-01.jpg">
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <form role="form" id="form-account-profile" method="post" >

                                    <!-- Le bloc suivant n'apparait que pour les Professionnels /!\ -->

                                        <!-- La prochaine div ne vous sera sans doute pas utile, je la laisse au cas où -->
                                        <div class="checkbox switch" id="agent-switch" data-agent-state="is-agent">
                                            <label>
                                                Je suis un professionnel<input type="checkbox">
                                            </label>
                                        </div>


                                        <section id="agency">
                                            <h3>Mon Agence</h3>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <label for="account-agency">Votre agence:</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="form-group">
                                                        <select name="account-agency" id="account-agency">
                                                            <option value="">Agency</option>
                                                            <option value="1">Estate+</option>
                                                            
                                                        </select>
                                                    </div><!-- /.form-group -->
                                                </div>
                                            </div>
                                        </section>

                                        <!-- Fin du bloc réservé aux professionnels -->

                                        <section id="contact">
                                            <h3>Contact</h3>
                                            <dl class="contact-fields">
                                                <dt><label for="form-account-name">Nom:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-name" name="form-account-name" required value="Jeffrey Scott">
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="form-account-name">Prénom:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-name" name="form-account-name" required value="Jeffrey Scott">
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="form-account-phone">Téléphone:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-phone" name="form-account-phone" value="(123) 456 789">
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="form-account-email">Email:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-email" name="form-account-phone" value="jeffrey.scott@example.com">
                                                </div><!-- /.form-group --></dd>
                                            </dl>
                                        </section>
                                        <section id="about-me">
                                            <h3>À propos de moi!</h3>
                                            <div class="form-group">
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div><!-- /.form-group -->
                                        </section>
                                        <section id="social">
                                            <h3>Mes réseaux sociaux</h3>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                                    <input type="text" class="form-control" id="account-social-twitter" name="account-social-twitter">
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                                    <input type="text" class="form-control" id="account-social-facebook" name="account-social-facebook" >
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                                                    <input type="text" class="form-control" id="account-social-facebook" name="account-social-facebook" >
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group clearfix">
                                                <button type="submit" class="btn pull-right btn-default" id="account-submit">Sauvegarder les changements</button>
                                            </div><!-- /.form-group -->
                                        </section>
                                    </form><!-- /#form-contact -->
                                    <section id="change-password">
                                        <header><h2>Changer votre mot de passe</h2></header>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <form role="form" id="form-account-password" method="post" >
                                                    <div class="form-group">
                                                        <label for="form-account-password-current">Mot de passe actuel</label>
                                                        <input type="password" class="form-control" id="form-account-password-current" name="form-account-password-current">
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group">
                                                        <label for="form-account-password-new">Nouveau mot de passe</label>
                                                        <input type="password" class="form-control" id="form-account-password-new" name="form-account-password-new">
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group">
                                                        <label for="form-account-password-confirm-new">Confirmer le nouveau mot de passe</label>
                                                        <input type="password" class="form-control" id="form-account-password-confirm-new" name="form-account-password-confirm-new">
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group clearfix">
                                                        <button type="submit" class="btn btn-default" id="form-account-password-submit">Changer le mot de passe</button>
                                                    </div><!-- /.form-group -->
                                                </form><!-- /#form-account-password -->
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <strong>Indice:</strong>
                                                <p>Texte indice
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div><!-- /.col-md-9 -->
                            </div><!-- /.row -->
                        </div><!-- /.account-profile -->
                    </section><!-- /#profile -->
                </div><!-- /.col-md-9 -->
                <!-- end My Properties -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
