<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\Builder\Builders\Vehicle;

use PHPDesignPattern\Pattern\Creational\Builder\Abstracts\Builder;
use PHPDesignPattern\Pattern\Creational\Builder\Interfaces\Truck;
use function PHPDesignPattern\output;

class TruckBuilder extends Builder
{
    protected $vehicle;

    protected $name = '卡车生产车间';

    public function __construct(Truck $truck)
    {
        output("欢迎来到{$this->name}");
        $this->vehicle = $truck;
    }
}
