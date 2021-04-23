<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use PHPDesignPattern\Pattern\Structural\Adapter\DDCar;
use PHPDesignPattern\Pattern\Structural\Adapter\XDCar;
use PHPDesignPattern\Pattern\Structural\Adapter\Adaptees\BackCamera\Original;
use PHPDesignPattern\Pattern\Structural\Adapter\Adaptees\BackCamera\Refitting;
use function PHPDesignPattern\dump;
use function PHPDesignPattern\output;

require __DIR__ . '/../../vendor/autoload.php';

try {
    $newDDCar = new DDCar();
    $newDDCar
        ->setName('小轿车')
        ->setBrand('大豆牌')
        ->setBackCamera(new Original())
        ->showDetail()
    ;
    $newXDCar = new XDCar();
    $newXDCar
        ->setName('小轿车')
        ->setBrand('小豆牌')
        ->setBackCamera(new Refitting())
        ->showDetail()
        ->showDetail()
    ;
} catch (Exception $e) {
    output($e->getMessage());
}
