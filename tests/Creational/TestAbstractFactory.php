<?php

/*
 * This file is part of the lawyersoa/php-design-pattern.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use PHPDesignPattern\Pattern\Creational\AbstractFactory\XDFactory;
use PHPDesignPattern\Pattern\Creational\AbstractFactory\DDFactory;

require __DIR__ . '/../../vendor/autoload.php';

try {
    //小豆生产线生产一辆公共汽车
    $newXDBus = XDFactory::manufactureBus();
    $newXDBus->runInBusRoad();
    //小豆生产线生产一辆小轿车
    $newXDCar = XDFactory::manufactureCar();
    $newXDCar->runInCarRoad();
    //小豆生产线生产一辆卡车
    $newXDTruck = XDFactory::manufactureTruck();
    $newXDTruck->runInTruckRoad();
    //大豆生产线生产一辆公共汽车
    $newDDBus = DDFactory::manufactureBus();
    $newDDBus->runInBusRoad();
    //大豆生产线生产一辆小轿车
    $newDDCar = DDFactory::manufactureCar();
    $newDDCar->runInCarRoad();
    //大豆生产线生产一辆卡车
    $newDDTruck = DDFactory::manufactureTruck();
    $newDDTruck->runInTruckRoad();
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
