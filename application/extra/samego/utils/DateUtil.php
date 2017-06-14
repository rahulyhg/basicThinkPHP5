<?php

/**
 * Created by PhpStorm.
 * User: alic
 * Date: 17-6-12
 * Time: 下午5:34
 */

namespace app\extra\samego\utils;
final class DateUtil
{
    public static $FORMAT_YmdHis = "Y-m-d H:i:s";
    public static $FORMAT_Ymd = "Y-m-d";

    /**
     * 当前日期转字符串
     * @param $format
     * @return string
     */
    public static function getCurrentDate2String($format)
    {
        return (new \DateTime())->format($format);
    }
}