<?php

/*
 * This file is part of the lawyersoa/php-design-pattern.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use PHPDesignPattern\Pattern\Structural\Facade\Car;
use function PHPDesignPattern\dump;

require __DIR__ . '/../../vendor/autoload.php';

try {
    $newCar = new Car();
    $newCar->startEngine();
} catch (Exception $e) {
    dump($e->getMessage());
}
