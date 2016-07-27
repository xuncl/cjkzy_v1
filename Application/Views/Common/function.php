<?php
/**
 * Created by PhpStorm.
 * User: CLEVO
 * Date: 2016/7/22
 * Time: 9:40
 */

function getAge($year){
    $now = date('Y');
    if ($now<$year){
        return '数据错误';
    }
    return $now-$year;
}

function get_user_friends(){
    $friends=array(
      array(
        'user_name'=>'xcl',
          'avatar'=>null,
          'age'=>20,
          'tags'=>array('shopping')
      ),
      array(
        'user_name'=>'xcl2',
          'avatar'=>null,
          'age'=>22,
          'tags'=>array('shopping2')
      ),
      array(
        'user_name'=>'xcl3',
          'avatar'=>null,
          'age'=>23,
          'tags'=>array('shopping3')
      ),
      array(
        'user_name'=>'xcl4',
          'avatar'=>null,
          'age'=>24,
          'tags'=>array('shopping4')
      ),
    );
    return $friends;
}