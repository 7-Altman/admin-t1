<?php
/**
 * Created by PhpStorm.
 * User: 13507
 * Date: 2017/01/04
 * Time: 14:51
 */
namespace Admin\Controller;

use Admin\Controller;

class PublisherController extends BaseController
{
    public function index()
    {
        $this->display();
    }

    public function create(){
        if(IS_POST){

        }else{
            $this->display();
        }
    }
}