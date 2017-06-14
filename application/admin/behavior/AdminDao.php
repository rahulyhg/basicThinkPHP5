<?php

/**
 * 该类是Action的实现
 * Created by alic(AlicFeng) on 17-6-14 上午1:13 from PhpStorm.
 * Email is alic@samego.com
 */

namespace app\admin\behavior;

use app\admin\action\AdminAction;
use app\admin\model\Admin;
use app\admin\model\AdminBean;
use think\Cookie;
use think\Model;

class AdminDao extends Model implements AdminAction
{

    /**
     * @param $username
     * @param $password
     * @param $captcha
     * @return mixed
     */
    function checkAdminLoginAction($username, $password, $captcha)
    {
        // TODO: Implement checkAdminLoginAction() method.
        if (!captcha_check($_POST["captcha"])) {
            //验证码有错
            return -1;
        } else {
            $condition["username"] = $username;
            if (null == (db("administrator")->where($condition)->find())) {
                //用户名不存在
                return -2;
            } else {
                $condition["password"] = md5($password);
                if (null == (db("administrator")->where($condition)->find())) {
                    //密码错误
                    return -3;
                } else {
                    //登录成功
                    Cookie::set("username", $username, 60 * 60 * 24);
                    return 1;
                }
            }
        }
    }
}