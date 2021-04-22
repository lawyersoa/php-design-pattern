<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\FactoryMethod\Abstracts;

use PHPDesignPattern\Pattern\Creational\FactoryMethod\Interfaces\Vehicle as VehicleInterface;
use function PHPDesignPattern\output;

abstract class Vehicle implements VehicleInterface
{
    protected $name;

    protected $voice;

    public function __construct()
    {
        output("我是一辆{$this->name}");
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
        output("{$this->name}启动中，{$this->voice}");
        return $this;
    }

    /**
     * 行驶
     *
     * @return $this
     */
    public function run()
    {
        output("{$this->name}行驶中，{$this->voice}");
        return $this;
    }

    /**
     * 加速
     *
     * @return $this
     */
    public function speedUp()
    {
        output("{$this->name}加速中，{$this->voice}");
        return $this;
    }

    /**
     * 熄火
     *
     * @return $this
     */
    public function stopEngine()
    {
        output("{$this->name}熄火中，{$this->voice}");
        return $this;
    }
}
