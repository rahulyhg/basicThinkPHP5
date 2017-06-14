<?php

namespace app\extra\samego\sqlcommand;
/**
 * Created by PhpStorm.
 * User: alic
 * Date: 17-6-12
 * Time: 下午4:53
 */
final class HomeSQL
{
    public static $HomeSQLCommand = array(
        "ADD_WEBSITE_ACCESS_ACCOUNT" => "INSERT INTO `website_access_account` (`date`,`ip`) VALUE (?,?)"
    );
}