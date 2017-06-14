<?php

/**
 * Created by PhpStorm.
 * User: alic
 * Date: 17-6-13
 * Time: 下午11:04
 */

namespace app\admin\model;

use think\Model;

class AdministratorBean extends Model
{
    private $username;//用户名
    private $password;//密码

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}