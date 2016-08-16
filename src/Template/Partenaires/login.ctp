<?= $this->Form->create(null, ['url' => ['action' => 'login']]) ?>
<div class="wrapper">
    <div class="col-md-8 col-sm-8">
        <div class="col-md-4 col-sm-4">
            <div class="form-group">
                 <?php echo $this->Form->input('username',['label' => 'Pseudonyme']); ?>
                 </div>
            <div class="form-group">
              <?php echo $this->Form->input('password',['label' => 'Mot de passe']); ?>
              </div>
           <?= $this->Form->button(__('Se connecter')) ?>
        </div>
    </div>
</div>
<?= $this->Form->end() ?>
