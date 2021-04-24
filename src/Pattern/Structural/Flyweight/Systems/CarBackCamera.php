<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Structural\Flyweight\Systems;

use PHPDesignPattern\Pattern\Structural\Flyweight\Abstracts\BackCamera;
use function PHPDesignPattern\output;

class CarBackCamera extends BackCamera
{
    protected $name = '小轿车倒车影像';
}
