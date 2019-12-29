<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class People extends Entity{
	protected $_accessible =[
	'name'=> true,
	'mail'=> true,
	'age' => true,
	'delete_flg' => true,
	
	]
}