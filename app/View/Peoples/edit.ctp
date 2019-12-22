<div>
    <h3>List Persons</h3>
   <?=$this->Form->create(null,
    ['type'=>'post',
    	'url'=>['controller'=>'Peoples',
    	'action' => 'update']])?>
    <div>name</div>
    <div><?=$this->Form->text($datas['People']['mail']) ?></div>
    <div>mail</div>
    <div><?=$this->Form->text($datas['People']['mail']) ?></div>
    <div>age</div>
    <div><?=$this->Form->text($datas['People']['age']) ?></div>
    <div><?=$this->Form->submit('送信') ?></div>
   <?=$this->Form->end() ?>
</div>