<?php

/**
 * Created by PhpStorm.
 * User: alic
 * Date: 17-6-12
 * Time: 下午4:49
 */
namespace app\home\model\action;

interface WebsiteAccessAccountAction
{
    /**
     * WebsiteAccessAccountAction constructor.
     */
    function __construct();

    /**
     * 增加访问量
     * 注意：一天一个IP算一次
     * @return mixed
     */
    function addAccessAccountEvent();
}