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
      if($this->request->is('post')){
		$name = $this->request->data['People']['name'];
		$mail = $this->request->data['People']['mail'];
		$condition = ['conditions'=>[
			'and' =>[
				'name like'=>'%'.$name.'%',
				'mail like'=>'%'.$mail.'%',
				]
		]];
		//$datas = $this->People->find()->where(['name'=>$name]);

		$datas = $this->People->find('all',$condition);

	  }else{
	  	$datas = $this->People->find('all',['oeder' =>'People.age']);
	  }
	  $this->set('datas',$datas);
    }
    //登録画面表示
    public function add(){
    
    }
    //登録処理
    public function create(){
    	if($this->request->is('post')){
    		$data = $this->request->data['People'];
    		// モデルをロード
        	$this->loadModel('People');
        	
        	// scoresテーブルに保存
        	$this->People->save($data);
        	
        	return $this->redirect(['action' => 'index']);
    	
    	}
    }
    //編集画面表示
    public function edit($id=null){
    	//Get確認
    	if($this->request->is('get')){
    		$id = $this->request->query('id');
    		//指定プライマリーキーのデータをセット
 			$datas = $this->People->findById($id);
 			$this->set('datas',$datas);
 		}
    }
    //更新処理
    public function update(){
    
    	if($this->request->is('post')){
    		$data = $this->request->data['People'];
    		$this->People->save($data);
    	
    		return $this->redirect(['action' => 'index']);
    	}
    }
    //削除処理
    //TODO:POSTリンクを使用した削除処理
    //TODO：DB上論理削除？
    public function delete($id = null){
    	if($this->request->is('get')){
    		$id = $this->request->query('id');
    		$this->People->delete($id);
    		return $this->redirect(['action' => 'index']);
    	}
    }
}
