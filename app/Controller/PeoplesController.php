<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class PeoplesController extends Controller {

    //Top画面表示
 	public function index()
    {
	  $delete_flg = 0;

      if($this->request->is('post')){
		$name = $this->request->data['People']['name'];
		$mail = $this->request->data['People']['mail'];
		$condition = ['conditions'=>[
			'delete_flg ' => $delete_flg,
			'and' =>[
				'name like'=>'%'.$name.'%',
				'mail like'=>'%'.$mail.'%',
			]
		]];
		
		$datas = $this->People->find('all',$condition);

	  }else{
		$condition = ['conditions'=>[
			'delete_flg ' => $delete_flg,
		]];
	  	$datas = $this->People->find('all',$condition);
	  }
	  $this->set('datas',$datas);
    }
    //登録画面表示
    public function add(){
    
    }
    //登録処理
    public function create(){
    	if($this->request->is('post')){
			$data = $this->request->data;
			
			$check = $this->People->save($data);

			if($check === false) {
				return $this->render('add');
			}
        	return $this->redirect(['action' => 'index']);
    	
    	}
    }
    //編集画面表示
    public function edit(){
    	//Get確認
    	if($this->request->is('get')){
			$id = $this->request->query('id');
			$datas = $this->People->findById($id);

 			$this->set('datas',$datas);
		 }
		 
    }
    //更新処理
    public function update(){
    
    	if($this->request->is('post')){
			
			$id = $this->request->data['People']['id'];
			//$id = $this->request->query('id');
			$update_datas = $this->request->data['People'];
			$check = $this->People->save($update_datas);
			if($check === false) {
				$datas = $this->People->findById($id);
				$this->set(compact('id','datas'));
				//$this->set('datas',$datas);
				return $this->render('edit');
			}
			return $this->redirect(['action' => 'index']);
    	}
    }
    //削除処理
    public function delete(){
    	if($this->request->is('get')){
			$id = $this->request->query('id');
			$datas = array('People' => array('id' => $id, 'delete_flg' => 1));
			// 更新する項目（フィールド指定）
			$fields = array('delete_flg');
			// deleteフラグ更新 0:未削除　1:削除
			$this->People->save($datas, false, $fields);
    		return $this->redirect(['action' => 'index']);
    	}
    }
}
