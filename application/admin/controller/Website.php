<?php
/**
 * Created by PhpStorm.
 * User: alic
 * Date: 17-6-13
 * Time: 下午2:07
 */

namespace app\admin\controller;


use think\Controller;

class Website extends Controller
{
    /**
     * 后台框架首页
     */
    public function adminIndex()
    {
        echo "websiteMessage";
    }

    /**
     * 网站基础信息
     */
    public function websiteBasicMessageSetting()
    {
        echo "websiteBasicMessageSetting";
    }
}