<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\AbstractFactory\Abstracts;

abstract class AbstractFactory
{
    abstract static function manufactureBus();
    abstract static function manufactureCar();
    abstract static function manufactureTruck();
}
