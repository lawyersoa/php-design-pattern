<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\Singleton\Singletons;

class Driver
{
    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if(!isset(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function __clone()
    {

    }

    /**
     * 获取驾驶员编号
     *
     * @return string
     */
    public function getDriverNo()
    {
        return (string)spl_object_id($this);
    }
}
