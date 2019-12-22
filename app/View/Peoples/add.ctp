<div>
    <h3>List Persons</h3>
   <?=$this->Form->create(null,
    ['type'=>'post',
    	'url'=>['controller'=>'Peoples',
    	'action' => 'create']])?>
    <div>name</div>
    <div><?=$this->Form->text('People.name') ?></div>
    <div>mail</div>
    <div><?=$this->Form->text('People.mail') ?></div>
    <div>age</div>
    <div><?=$this->Form->text('People.age') ?></div>
    <div><?=$this->Form->submit('‘—M') ?></div>
   <?=$this->Form->end() ?>
</div>