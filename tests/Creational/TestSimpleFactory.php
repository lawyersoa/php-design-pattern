<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use PHPDesignPattern\Pattern\Creational\SimpleFactory\SimpleFactory;

require __DIR__ . '/../../vendor/autoload.php';

try {
    $simpleFactory = new SimpleFactory();
    //生产一辆小轿车
    $newCar1 = SimpleFactory::manufacture(SimpleFactory::AUTOMOBILE_TYPE_CAR);
    //再生产一辆小轿车
    $newCar2 = SimpleFactory::manufacture(SimpleFactory::AUTOMOBILE_TYPE_CAR);
    //生产一辆公共汽车
    $newBus = SimpleFactory::manufacture(SimpleFactory::AUTOMOBILE_TYPE_BUS);
    //生产一辆卡车
    $newTruck = SimpleFactory::manufacture(SimpleFactory::AUTOMOBILE_TYPE_TRUCK);
    //生产一辆新能源电动车
    $newGreenCar = SimpleFactory::manufacture('新能源电动车');
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
