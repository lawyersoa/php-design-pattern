<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\AbstractFactory\Interfaces;

interface Truck
{
    /**
     * 专用道路名称
     */
    const ROAD_NAME = '卡车道路';

    /**
     * 在卡车车道行驶
     *
     * @return $this
     */
    public function runInTruckRoad();
}
