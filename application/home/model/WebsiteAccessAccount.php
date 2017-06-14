<?php
/**
 * Created by PhpStorm.
 * User: alic
 * Date: 17-6-12
 * Time: 下午4:46
 */

namespace app\home\model;


use app\extra\samego\utils\DateUtil;
use app\home\model\action\WebsiteAccessAccountAction;
use think\Cookie;
use think\Model;
use think\Request;

class WebsiteAccessAccount extends Model implements WebsiteAccessAccountAction
{
    private $id;
    private $date;
    private $ip;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * 增加访问量
     * 注意：一天一个IP算一次
     * @return mixed
     */
    function addAccessAccountEvent()
    {
        if (null == Cookie::get("access")) {
            $data["date"] = DateUtil::getCurrentDate2String(DateUtil::$FORMAT_Ymd);
            $data["ip"]   = Request::instance()->ip();

            $access = \db("website_access_account")->where($data)->find();
            if (null == $access) {
                \db("website_access_account")->insert($data);
                //一个小时失效 -> 一个小时再次与数据库交互
                Cookie::set("access", md5(rand(), true), 60 * 60);
            }
        }
        return null;
    }
}