<?php
namespace Views\Controller;
use Think\Controller;
class LoginController extends Controller {
 
    //注册页面
    public function register()
    {
        $this->display();
    }
  
    //注册表单体检处理页面
    public function register_do()
    {
        //dump($_POST);
        $data['phone_number'] = I('post.phone_number','','strip_tags');
        $data['role_id'] = I('post.type','','strip_tags');
        $res = M('users')->add($data);
        $_SESSION['user_info'] = $res;
        if($res)
        {
            echo $ajax_ress = 0;
        }
    }
}