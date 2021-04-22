<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\FactoryMethod\Interfaces;

interface Vehicle
{
    /**
     * 启动
     *
     * @return $this
     */
    public function startEngine();

    /**
     * 行驶
     *
     * @return $this
     */
    public function run();

    /**
     * 加速
     *
     * @return $this
     */
    public function speedUp();

    /**
     * 熄火
     *
     * @return $this
     */
    public function stopEngine();
}
