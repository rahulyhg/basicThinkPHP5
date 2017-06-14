<?php

/**
 * Created by PhpStorm.
 * User: alic
 * Date: 17-6-14
 * Time: 上午12:06
 */

namespace app\admin\utils;

use think\Cookie;

final class AppUtil
{
    /**
     * 判断是否已经登录了
     * @return bool
     */
    public static function isLoginStatus()
    {
        if (null != Cookie::get("username"))
            return true;
        else
            return false;
    }

    /**
     * 没有登录就跳转到login
     */
    public static function isToLogin()
    {
        if (!self::isLoginStatus()) {
            echo "<script>window.location.href='/admin/admin/login.html'</script>";
        }
    }

    /**
     * 登陆了就跳转到admin
     */
    public static function isToAdmin()
    {
        if (self::isLoginStatus()) {
            echo "<script>window.location.href='/admin/index/index.html'</script>";
        }
    }

    /**
     * 重定向登录界面
     */
    public static function redirectLogin()
    {
        echo "<script>window.location.href='/admin/admin/login.html'</script>";
    }
}