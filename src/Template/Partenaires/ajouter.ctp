
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Créer un compte') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('username',['label' => 'Pseudonyme']);
            echo $this->Form->input('password',['label' => 'Mot de passe']);
            echo $this->Form->input('first_name',['label' => 'Nom']);
            echo $this->Form->input('last_name',['label' => 'Prenom']);
            echo $this->Form->input('company_name',['label' => 'Nom de votre compagnie']);
        echo $this->Form->input('Status', ['options' => $query]);
        echo $this->Form->input('address',['label' => 'Adresse']);
            echo $this->Form->input('zipcode',['label' => 'Code postal']);
            echo $this->Form->input('city',['label' => 'Ville']);
            echo $this->Form->input('phone',['label' => 'Téléphone']);
            echo $this->Form->input('website_link',['label' => 'URL de votre site']);
            echo $this->Form->input('facebook_link',['label' => 'URL de votre page Facebook']);
            echo $this->Form->input('twitter_link',['label' => 'URL de votre page Twitter']);
            echo $this->Form->input('linkedin_link',['label' => 'URL de votre page Linkedin']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Valider')) ?>
    <?= $this->Form->end() ?>
