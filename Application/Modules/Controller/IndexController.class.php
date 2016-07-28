<?php
namespace Modules\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $user=D('User');
        dump($user->select());
        dump($user->getDbFields());
//        dump($user->db(1,'DB_2')->table('user')->select()); // 指定数据库和数据表
    }

    public function waysToCreateModel(){

        $user_model = new \Modules\Model\UserModel();

        $user_m_model = M('User');

        $user_d_model = D('User');

        $empty_model = new \Think\Model();
        $empty_m_model = M();
        $empty_d_model = D();
    }
}