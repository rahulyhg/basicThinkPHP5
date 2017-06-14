<?php
/**
 * Created by alic(AlicFeng) on 17-6-13 下午2:18 from PhpStorm.
 * Email is alic@samego.com
 */


namespace app\admin\controller;


use app\admin\behavior\AdminDao;
use app\admin\utils\AppUtil;
use think\Controller;
use think\Cookie;

class Admin extends Controller
{
    /**
     * 管理员登录
     */
    public function login()
    {
        AppUtil::isToAdmin();
        return view();
    }

    /**
     * 管理员登录 Event
     */
    public function loginEvent()
    {
        $adminDao = new AdminDao();
        echo $adminDao->checkAdminLoginAction($_POST["username"], $_POST["password"], $_POST["captcha"]);
    }

    /**
     * 管理员注销 Event
     */
    public function logout()
    {
        Cookie::delete("username");
        Cookie::clear("username");
        AppUtil::redirectLogin();
    }
}