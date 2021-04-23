<?php

/*
 * This file is part of the lawyersoa/php-design-pattern.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use PHPDesignPattern\Pattern\Creational\Builder\Builders\Vehicle\{
    BusBuilder,
    CarBuilder,
    TruckBuilder
};
use PHPDesignPattern\Pattern\Creational\Builder\Entities\Vehicle\{
    Bus\DDBus,
    Bus\XDBus,
    Car\DDCar,
    Car\XDCar,
    Truck\DDTruck,
    Truck\XDTruck,
};
use PHPDesignPattern\Pattern\Creational\Builder\Director;

require __DIR__ . '/../../vendor/autoload.php';

try {
    //========== 初始化产品原型 ==========
    $XDBus = new XDBus();
    $XDBus
        ->setEngine('XD发动机')
        ->setChassis('XD底盘')
        ->setBody('XD车身')
        ->setElectricalEquipment('XD电气设备')
    ;
    //========== 初始化不同汽车构建者 ==========
    $busBuilder = new BusBuilder($XDBus);
//    $carBuilder = new CarBuilder();
//    $truckBuilder = new TruckBuilder();

    //========== 初始化指挥者 ==========
    $director = new Director();
    $director->setBuilder($busBuilder);
    $newXDBus = $director
        ->build()
        ->getNewVehicle()
    ;
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
