<?php
namespace Views\Controller;

use Think\Controller;

class LoginController extends Controller
{

    //注册页面
    public function register()
    {
        $this->display();
    }

    public function send_code()
    {
        $phone = I("post.phone");
        $code = "";
        $code .= rand(0, 9);
        $code .= rand(0, 9);
        $code .= rand(0, 9);
        $code .= rand(0, 9);
        sendCode($phone, $code);
        session('randomCode', $code);
        session('phone', $phone);
    }


    //注册表单体检处理页面
    public function register_do()
    {
        if (IS_POST) {

            $code = $_SESSION['randomCode'];
            $phone = $_SESSION['phone'];


            $clients['name'] = I('post.phone');
            $clients['phone'] = I('post.phone', '', 'strip_tags');
            $clients['pswd'] = I('post.password', '', 'strip_tags');
            $clients['type'] = I('post.role_name');
            $codes = I('post.verification', '', 'strip_tags');

            if ($clients['phone'] == $phone) {
                if ($codes == $code) {
                    $res = D('ClientsKMW')->add($clients);
//                    dump($clients);
//                    echo 'add result: ' . $res;
                    if ($res) {
                        $result = sentToRemote($clients);
                        if ($result) {
                            $this->clearSession();
                            //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
                            $this->success('注册成功，正在前往下载', 'success', 3);
                        } else {
                            //错误页面的默认跳转页面是返回前一页，通常不需要设置
                            $this->error('远程服务失效，请稍后再尝试', 'index', 5);
                        }
                    } else {
                        $this->error('远程服务失效，请稍后再尝试', 'index', 5);
                    }

                } else {
                    $this->error("验证码填写错误");
                }
            } else {
                $this->error("请检查手机号");
            }
        } else {
            $this->error("信息错误");
        }

    }


    public function success()
    {
        header("Location: http://www.51kuaimei.com/download?media=8810"); /* 跳转 */
        exit;/* 确保其他php代码不会执行. */
    }

    //清空session
    public function clearSession()
    {
        session('randomCode', null);
        session('phone', null);
    }
}