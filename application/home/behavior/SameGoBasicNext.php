<?php

/**
 * Created by PhpStorm.
 * User: alic
 * Date: 17-6-12
 * Time: 下午6:28
 */

namespace app\home\behavior;

final class SameGoBasicNext
{
    /**
     * 统计网站访问数量
     */
    public static function handlerAccessWebsite()
    {
        $access = new \app\home\model\WebsiteAccessAccount();
        $access->addAccessAccountEvent();
    }
}