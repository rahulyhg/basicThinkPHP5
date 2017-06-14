<?php
/**
 * Created by PhpStorm.
 * User: alic
 * Date: 17-6-12
 * Time: 下午9:02
 */

namespace app\admin\controller;


use think\Controller;

class Tool extends Controller
{
    /**
     * meta
     */
    public function basicMeta()
    {
        return view();
    }

    /**
     * 引进头部的基础公共文件
     */
    public function basicHeader()
    {
        return view();
    }
}