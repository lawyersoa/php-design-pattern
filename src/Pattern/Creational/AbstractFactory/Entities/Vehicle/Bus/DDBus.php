<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\AbstractFactory\Entities\Vehicle\Bus;

use PHPDesignPattern\Pattern\Creational\AbstractFactory\Abstracts\DDVehicle;
use PHPDesignPattern\Pattern\Creational\AbstractFactory\Interfaces\Bus;
use function PHPDesignPattern\output;

class DDBus extends DDVehicle implements Bus
{
    protected $name = '公共汽车';

    protected $voice = '嘟嘟嘟～';

    protected $speed = 80;

    public function runInBusRoad()
    {
        output("{$this->brand}牌{$this->name}在" . self::ROAD_NAME . "上能跑到{$this->speed}迈。");
    }
}
