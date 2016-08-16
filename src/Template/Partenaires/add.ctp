<?= $this->Form->create(null, ['url' => ['action' => 'add']]); ?>
<div class="container">
          <fieldset>
            <legend><?= __('Créer un compte') ?></legend>
                <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">

                       <?php
                           echo $this->Form->input('Status', ['options' => $query]);
                           ?>
                           <div class="form-group">
                            <?php echo $this->Form->input('is_active',['type' => 'checkbox', 'label' => 'Actif']);
                            ?></div>
                        <div class="form-group">
                          <?php echo $this->Form->input('is_member',['type' => 'checkbox', 'label' => 'Membre']);
                          ?></div>
                        <div class="form-group">
                            <?php echo $this->Form->input('is_admin', ['type' => 'checkbox', 'label' => 'Admin']);
                            ?></div>

                        <hr>
                        <div class="form-group">
                           <?php echo $this->Form->input('company_name',['label' => 'Nom de votre agence']);
                            ?></div>
                        <div class="form-group">
                              <?php
                              echo $this->Form->input('first_name',['label' => 'Nom']);?>
                        </div>
                        <div class="form-group">
                            <?php
                            echo $this->Form->input('last_name',['label' => 'Prenom']);
                             ?>
                        </div>
                        <div class="form-group">
                           <?php
                           echo $this->Form->input('address',['label' => 'Adresse']);
                           ?></div>
                        <div class="form-group">
                           <?php
                           echo $this->Form->input('zipcode',['label' => 'Code postal']);
                           ?></div>
                        <div class="form-group">
                            <?php
                            echo $this->Form->input('city',['label' => 'Ville']);
                            ?></div>
                        <div class="form-group">
                        <?php
                        echo $this->Form->input('email');
                        echo $this->Form->input('is_hidden',['type' => 'checkbox', 'label' => 'Cacher l\'e-mail sur le site']);
                        ?></div>
                        <div class="form-group">
                        <?php
                        echo $this->Form->input('phone',['label' => 'Téléphone']);
                        ?>
                        </div>
                        <div class="form-group">
                        <?php
                        echo $this->Form->input('username',['label' => 'Pseudonyme']);
                        ?>
                        </div>
                        <div class="form-group">
                        <?php
                        echo $this->Form->input('password',['label' => 'Mot de passe']);
                        ?>
                        </div>
                        <div class="form-group">
                        <?php
                         echo $this->Form->input('website_link',['label' => 'URL de votre site']);
                        ?>
                        </div>
                        <div class="form-group">
                        <?php
                        echo $this->Form->input('facebook_link',['label' => 'URL de votre page Facebook']);
                        ?>
                        </div>
                        <div class="form-group">
                        <?php
                        echo $this->Form->input('twitter_link',['label' => 'URL de votre page Twitter']);
                        ?>
                        </div>
                        <div class="form-group">
                        <?php
                        echo $this->Form->input('linkedin_link',['label' => 'URL de votre page Linkedin']);
                        ?>
                        </div>
                        <?= $this->Form->button(__('Valider')) ?>
                        <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
        </fieldset>
    </div>
