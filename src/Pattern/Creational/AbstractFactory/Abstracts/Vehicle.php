<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\AbstractFactory\Abstracts;

use PHPDesignPattern\Pattern\Creational\AbstractFactory\Interfaces\Vehicle as VehicleInterface;

abstract class Vehicle implements VehicleInterface
{
    protected $name;

    protected $voice;

    protected $brand;

    public function __construct()
    {
        echo "我是一辆{$this->brand}牌的{$this->name}" . PHP_EOL;
    }

    public function __toString()
    {
        return (string)spl_object_id($this);
    }

    /**
     * 启动
     *
     * @return $this
     */
    public function startEngine()
    {
        echo "{$this->name}启动中，{$this->voice}" . PHP_EOL;
        return $this;
    }

    /**
     * 行驶
     *
     * @return $this
     */
    public function run()
    {
        echo "{$this->name}行驶中，{$this->voice}" . PHP_EOL;
        return $this;
    }

    /**
     * 加速
     *
     * @return $this
     */
    public function speedUp()
    {
        echo "{$this->name}加速中，{$this->voice}" . PHP_EOL;
        return $this;
    }

    /**
     * 熄火
     *
     * @return $this
     */
    public function stopEngine()
    {
        echo "{$this->name}熄火中，{$this->voice}" . PHP_EOL;
        return $this;
    }
}
