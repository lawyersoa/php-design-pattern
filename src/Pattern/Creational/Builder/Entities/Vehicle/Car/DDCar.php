<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\Builder\Entities\Vehicle\Car;

use PHPDesignPattern\Pattern\Creational\Builder\Abstracts\Vehicle;
use PHPDesignPattern\Pattern\Creational\Builder\Interfaces\Car;
use function PHPDesignPattern\output;

class DDCar extends Vehicle implements Car
{
    public function __construct()
    {
        output("我是一辆大豆牌小汽车。");
        $this->setName('小轿车');
        $this->setBrand('大豆牌');
    }
}
