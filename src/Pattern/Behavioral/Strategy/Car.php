<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Behavioral\Strategy;

use PHPDesignPattern\Pattern\Behavioral\Strategy\Interfaces\Transmission;
use function PHPDesignPattern\output;

class Car
{
    /**
     * @var Transmission 变速技术
     */
    private $transmission;

    /**
     * 获取变速技术
     * @return Transmission
     */
    public function getTransmission(): Transmission
    {
        return $this->transmission;
    }

    /**
     * 设置变速技术
     *
     * @param Transmission $transmission
     * @return Car
     */
    public function setTransmission(Transmission $transmission): Car
    {
        $this->transmission = $transmission;
        return $this;
    }

    /**
     * 加速
     */
    public function speedUp()
    {
        output('我要准备加速了哦～');
        output('我的变速技术采用：' . $this->transmission->getName());
        $this->transmission->speedUp();
    }

}
