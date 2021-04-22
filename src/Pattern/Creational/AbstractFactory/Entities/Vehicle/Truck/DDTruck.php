<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\AbstractFactory\Entities\Vehicle\Truck;

use PHPDesignPattern\Pattern\Creational\AbstractFactory\Abstracts\DDVehicle;
use PHPDesignPattern\Pattern\Creational\AbstractFactory\Interfaces\Truck;
use function PHPDesignPattern\output;

class DDTruck extends DDVehicle implements Truck
{
    protected $name = '卡车';

    protected $voice = '哔哔哔～';

    protected $speed = 120;

    public function runInTruckRoad()
    {
        output("{$this->brand}牌{$this->name}在" . self::ROAD_NAME . "上能跑到{$this->speed}迈。");
    }
}
