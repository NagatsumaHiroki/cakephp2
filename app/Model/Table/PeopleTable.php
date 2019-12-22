<?php

namespace App\Mode\Table;

use Cake\ORM\Table;

class PeopleTable extends Table{

	public function initialize(array $config){
		parent::initialize($config);
		
		$this->setTable('people');
		$this->setDisplay('name');
		$this->setPrimaryKey('id');


	}
}
