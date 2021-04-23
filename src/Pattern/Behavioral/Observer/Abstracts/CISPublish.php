<?php

/*
 * This file is part of the lawyersoa/php-design-pattern.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Behavioral\Observer\Abstracts;

abstract class CISPublish
{
    protected static $observers;

    protected $version;

    protected $name;

    public function __construct()
    {
        if(!isset(self::$observers)){
            self::$observers = [];
        }
    }

    /**
     * 绑定订阅者
     *
     * @param CISSubscribe $sub 订阅者
     * @return $this
     */
    public function attach(CISSubscribe $sub)
    {
        if (!in_array($sub, self::$observers) && $sub->canUpgrade()) {
            self::$observers[] = $sub;
        }
        return $this;
    }

    /**
     * 移除订阅者
     *
     * @param CISSubscribe $sub 订阅者
     * @return $this
     */
    public function detach(CISSubscribe $sub)
    {
        if (in_array($sub, self::$observers)) {
            $key = array_search($sub, self::$observers);
            unset(self::$observers[$key]);
        }
        return $this;
    }

    /**
     * 设置版本号
     *
     * @param string $version 版本号
     * @return $this
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * 获取版本号
     *
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * 事件通知
     */
    public function notify()
    {
        foreach (self::$observers as $observer) {
            $observer->upgrade($this);
        }
    }
}
