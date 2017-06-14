<?php

namespace app\home\controller;

use app\home\behavior\SameGoBasicNext;

class Index
{
    public function index()
    {
        SameGoBasicNext::handlerAccessWebsite();
    }
}
