<?php
/**
 * Created by PhpStorm.
 * User: 13507
 * Date: 2017/01/04
 * Time: 11:17
 */
namespace Admin\Controller;

use Admin\Controller;
use Think\Verify;

class AdminController extends BaseController
{
    public function login()
    {
        if (IS_GET) {
            $this->display();
        } else {
            //此处接受post表单验证
            $adminModel = \D('Admin'); //实例化模型
            $data = $adminModel->create();
        }
    }

    public function logout()
    {

    }

    public function verify()
    {
        $config = array(
            'fontSize' => 14,    // 验证码字体大小
            'length' => 4,     // 验证码位数
            'useNoise' => false, // 关闭验证码杂点
            'useCurve' => false,
        );
        $Verify = new Verify($config);
        $Verify->entry();
    }
}