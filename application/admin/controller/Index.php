<?php

namespace app\admin\controller;

use app\admin\utils\AppUtil;
use think\Controller;
use think\Cookie;

class Index extends Controller
{
    public function index()
    {
        AppUtil::isToLogin();
        $view           = $this->view;
        $view->username = Cookie::get("username");
        return $view->fetch();
    }
}
