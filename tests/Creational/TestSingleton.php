<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use PHPDesignPattern\Pattern\Creational\Singleton\Singletons\Driver;
use function PHPDesignPattern\dump;

require __DIR__ . '/../../vendor/autoload.php';

try {
    $driver1 = Driver::getInstance();
    $driverNo1 = $driver1->getDriverNo();
    $driver2 = Driver::getInstance();
    $driverNo2 = $driver2->getDriverNo();
    dump($driverNo1, $driverNo2);
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
