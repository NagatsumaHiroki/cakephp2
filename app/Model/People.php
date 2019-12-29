<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppModel', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class People extends AppModel {
	/** 使用テーブル名 */
    public $name = 'people';

    public $validate = array(
        'name' => array(
            'rule1' => array(
                'rule' => 'notBlank',
                'message' => '名前を入力してください'
            ),
            'rule2' =>array(
                'rule' => array('between',0,50),
                'message' => '名前は50文字以内で入力してください'
            )
        ),
        'mail' => array(
            'rule1' => array(
                'rule' => 'notBlank',
                'message' => 'メールアドレスを入力してください'
            ),
            'rule2' =>array(
                'rule' => array('between',0,30),
                'message' => 'メールアドレスは50文字以内で入力してください'
            )
        )

    );
}
