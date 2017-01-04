<?php
/**
 * Created by PhpStorm.
 * User: 13507
 * Date: 2017/01/04
 * Time: 10:56
 */

namespace Admin\Controller;


use Think\Controller;

class BaseController extends Controller
{
    /**
     * BaseController constructor.
     * 登录校验
     */
    function __construct()
    {
        parent::__construct();
        $session_id = $_GET['session_id'];
        Session_id("$session_id");
        Session_start();
        //echo $session_id;
        //echo"<pre>";
        //print_r($_SESSION);die;
        $action = ACTION_NAME;
        $controller = CONTROLLER_NAME;
        $allow_list = array(
            'Admin_login',
            'Admin_logout',
            'Admin_check',
            'Admin_verify',
        );
        $userid = $_SESSION['admin_id'];
        $c_a_name = $controller . '_' . $action;
        if ($userid == ' ' && !in_array($c_a_name, $allow_list)) {
            $this->error('未登录', '/Admin/Admin/login', 3);
        }

    }
}