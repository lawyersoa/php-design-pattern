<?php

/*
 * This file is part of the lawyersoa/php-design-pattern.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Structural\Facade\Abstracts;

use function PHPDesignPattern\output;

abstract class System
{
    protected $name;

    public function report()
    {
        output("{$this->name}检测正常。");
    }
}
