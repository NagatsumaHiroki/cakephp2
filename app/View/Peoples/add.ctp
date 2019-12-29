<div>
    <h3>List Persons</h3>
   <form action="<?php echo $this->Html->url('/Peoples/create'); ?>" method="POST">
    <div>name</div>
    <div><?=$this->Form->text('People.name',array('required' => false)) ?></div>
    <?php echo $this->Form->error('People.name') ?>
    <div>mail</div>
    <div><?=$this->Form->text('People.mail',array('required' => false)) ?></div>
    <?php echo $this->Form->error('People.mail') ?>
    <div>age</div>
    <div><?=$this->Form->text('People.age') ?></div>
    <div><?=$this->Form->submit('登録') ?></div>
   </form>
</div>