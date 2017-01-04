<?php
/**
 * Created by PhpStorm.
 * User: 13507
 * Date: 2017/01/04
 * Time: 11:11
 */

namespace Admin\Controller;

use Admin\Controller;

class IndexController extends BaseController
{
    public function index()
    {
        $this->assign('admin_id', $_SESSION['admin_id']);
        $this->display();
    }
}