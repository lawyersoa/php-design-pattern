<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Behavioral\Strategy\Interfaces;

interface Transmission
{
    /**
     * 加速
     *
     * @return $this
     */
    public function speedUp();

    /**
     * 获取加速技术名称
     *
     * @return string
     */
    public function getName();
}
