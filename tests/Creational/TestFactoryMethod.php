<?php

/*
 * This file is part of the lawyersoa/php-design-pattern.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use PHPDesignPattern\Pattern\Creational\FactoryMethod\BusFactory;
use PHPDesignPattern\Pattern\Creational\FactoryMethod\CarFactory;
use PHPDesignPattern\Pattern\Creational\FactoryMethod\TruckFactory;

require __DIR__ . '/../../vendor/autoload.php';

try {
    //生产一辆公共汽车
    $newBus = BusFactory::manufacture();
    $newBus
        ->startEngine()
        ->run()
        ->speedUp()
        ->stopEngine();
    //生产一辆小轿车
    $newCar = CarFactory::manufacture();
    $newCar
        ->startEngine()
        ->run()
        ->speedUp()
        ->stopEngine();
    //生产一辆卡车
    $newTruck = TruckFactory::manufacture();
    $newTruck
        ->startEngine()
        ->run()
        ->speedUp()
        ->stopEngine();
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
