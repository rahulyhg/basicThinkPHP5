<?php

/**
 * action 是 behavior 的接口
 * Created by alic(AlicFeng) on 17-6-14 上午1:13 from PhpStorm.
 * Email is alic@samego.com
 */

namespace app\admin\action;
interface AdminAction
{
    /**
     * AdminAction constructor.
     */
    function __construct();

    /**
     * @param $username
     * @param $password
     * @param $captcha
     * @return mixed
     */
    function checkAdminLoginAction($username, $password, $captcha);
}