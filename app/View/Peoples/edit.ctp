<div>
    <h3>List Persons</h3>
    <form action="<?php echo $this->Html->url('/Peoples/update'); ?>" method="POST">
    <?=$this->Form->hidden('People.id',['value'=>  $datas['People']['id']]) ; ?>
    <div>name</div>
    <div><?=$this->Form->text('People.name',array('value' => $datas['People']['name'],'required' => false)) ?></div>
    <?php echo $this->Form->error('People.name') ?>
    <div>mail</div>
    <div><?=$this->Form->text('People.mail',array('value' => $datas['People']['mail'],'required' => false)) ?></div>
    <?php echo $this->Form->error('People.mail') ?>
    <div>age</div>
    <div><?=$this->Form->text('People.age',array('value' => $datas['People']['age'])) ?></div>
    <div><?=$this->Form->submit('送信') ?></div>
    </form>
</div>