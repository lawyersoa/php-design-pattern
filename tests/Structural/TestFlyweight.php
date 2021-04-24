<?php

/*
 * This file is part of the lawyersoa/php-design-pattern.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use function PHPDesignPattern\{
    dump,
    output
};
use PHPDesignPattern\Pattern\Structural\Flyweight\Factories\BackCameraMemory;

require __DIR__ . '/../../vendor/autoload.php';

try {
    $backCameraMemory = new BackCameraMemory();
    $memory01 = $backCameraMemory->getBackCamera('01');
    output(spl_object_id($memory01));
    $memory01Bak = $backCameraMemory->getBackCamera('01');
    output(spl_object_id($memory01Bak));
    $memory01->display();
    $memory02 = $backCameraMemory->getBackCamera('02');
    $memory02->display();
} catch (Exception $e) {
    output($e->getMessage());
}
