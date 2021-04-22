<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\AbstractFactory;

use PHPDesignPattern\Pattern\Creational\AbstractFactory\Abstracts\AbstractFactory;
use PHPDesignPattern\Pattern\Creational\AbstractFactory\Entities\Vehicle\Bus\XDBus;
use PHPDesignPattern\Pattern\Creational\AbstractFactory\Entities\Vehicle\Car\XDCar;
use PHPDesignPattern\Pattern\Creational\AbstractFactory\Entities\Vehicle\Truck\XDTruck;

class XDFactory extends AbstractFactory
{
    public static function manufactureBus()
    {
        return new XDBus();
    }

    public static function manufactureCar()
    {
        return new XDCar();
    }

    public static function manufactureTruck()
    {
        return new XDTruck();
    }
}
