<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\Builder\Entities\Vehicle\Truck;

use PHPDesignPattern\Pattern\Creational\Builder\Abstracts\Vehicle;
use PHPDesignPattern\Pattern\Creational\Builder\Interfaces\Truck;
use function PHPDesignPattern\output;

class XDTruck extends Vehicle implements Truck
{
    public function __construct()
    {
        output("我是一辆小豆牌卡车。");
        $this->setName('卡车');
        $this->setBrand('小豆牌');
    }
}
