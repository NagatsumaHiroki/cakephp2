<div>
    <h3>List Persons</h3>
     <?=$this->Form->create(null,
    ['type'=>'post',
    	'url'=>['controller'=>'Peoples',
    	'action' => 'index']])?>
    <div>name:<?=$this->Form->text('People.name',array('style' => 'width:180px')) ?>
    mail:<?=$this->Form->text('People.mail',array('style' => 'width:180px')) ?>
    </div>
    <div><?=$this->Form->submit('検索') ?></div>
    <?=$this->Form->end() ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>AGE</th>
                <th>MAIL</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datas as $key=>$val): ?>
                <tr>
                    <td><?php echo $datas[$key]['People']['id']?></td>
                    <td><a href="<?php echo($this->Html->url(array('controller' => 'Peoples','action' => 'edit')));?>?id=<?php echo $datas[$key]['People']['id']?>">
                    <?php echo $datas[$key]['People']['name'] ?></a>
					</td>
                    <td><?php echo $datas[$key]['People']['age']?></td>
                    <td><?php echo $datas[$key]['People']['mail']?></td>
                    <td><a href="<?php echo($this->Html->url(array('controller' => 'Peoples','action' => 'delete')));?>?id=<?php echo $datas[$key]['People']['id']?>">
                    delete
                    </a></td>
                </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
</div>