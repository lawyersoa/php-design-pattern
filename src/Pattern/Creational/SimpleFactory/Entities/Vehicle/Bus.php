<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\SimpleFactory\Entities\Vehicle;

use PHPDesignPattern\Pattern\Creational\SimpleFactory\Abstracts\Vehicle;
use function PHPDesignPattern\output;

class Bus extends Vehicle
{
    public function __construct()
    {
        output('我是一辆公共汽车');
    }
}
