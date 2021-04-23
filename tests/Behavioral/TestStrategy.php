<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use PHPDesignPattern\Pattern\Behavioral\Strategy\Car;
use PHPDesignPattern\Pattern\Behavioral\Strategy\Strategies\Transmission\{
    AMT,
    AT,
    CVT,
    DCT,
    MT
};
use function PHPDesignPattern\dump;

require __DIR__ . '/../../vendor/autoload.php';

try {
    $AMTTransmission = new AMT();
    $ATTransmission = new AT();
    $CVTTransmission = new CVT();
    $DCTTransmission = new DCT();
    $MTTransmission = new MT();
    $newCar = new Car();
    $newCar = new Car();
    $newCar
        ->setTransmission($AMTTransmission)
        ->setTransmission($ATTransmission)
        ->setTransmission($CVTTransmission)
        ->setTransmission($DCTTransmission)
        //->setTransmission($MTTransmission)
        ->speedUp();
} catch (Exception $e) {
    dump($e->getMessage());
}
