
<div class="wrapper">
    <div class="col-md-8 col-sm-8">
        <div class="col-md-4 col-sm-4">
        <?= $this->Flash->render('auth') ?>
<?= $this->Form->create('User') ?>
            <div class="form-group">
                 <?php echo $this->Form->input('username',['label' => 'Pseudonyme']); ?>
                 </div>
            <div class="form-group">
              <?php echo $this->Form->input('password',['label' => 'Password']); ?>
              </div>
           <?= $this->Form->button(__('Se connecter')) ?>
           <?= $this->Form->end() ?>
        </div>
    </div>
</div>

