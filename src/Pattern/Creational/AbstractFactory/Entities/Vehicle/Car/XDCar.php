<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\AbstractFactory\Entities\Vehicle\Car;

use PHPDesignPattern\Pattern\Creational\AbstractFactory\Abstracts\XDVehicle;
use PHPDesignPattern\Pattern\Creational\AbstractFactory\Interfaces\Car;
use function PHPDesignPattern\output;

class XDCar extends XDVehicle implements Car
{
    protected $name = '小轿车';

    protected $voice = '滴滴滴～';

    protected $speed = 170;

    public function runInCarRoad()
    {
        output("{$this->brand}牌{$this->name}在" . self::ROAD_NAME . "上能跑到{$this->speed}迈。");
    }
}
