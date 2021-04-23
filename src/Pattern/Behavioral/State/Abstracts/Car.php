<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Behavioral\State\Abstracts;

use PHPDesignPattern\Kernel\Exceptions\Exception;
use PHPDesignPattern\Pattern\Behavioral\State\States\Transmission\Back;
use PHPDesignPattern\Pattern\Behavioral\State\States\Transmission\Five;
use PHPDesignPattern\Pattern\Behavioral\State\States\Transmission\Four;
use PHPDesignPattern\Pattern\Behavioral\State\States\Transmission\One;
use PHPDesignPattern\Pattern\Behavioral\State\States\Transmission\Six;
use PHPDesignPattern\Pattern\Behavioral\State\States\Transmission\Three;
use PHPDesignPattern\Pattern\Behavioral\State\States\Transmission\Two;
use PHPDesignPattern\Pattern\Behavioral\State\States\Transmission\Zero;

abstract class Car
{
    protected $transmission;

    protected $speed;

    /**
     * 变速调节器
     *
     * @param int $speed
     * @throws Exception
     */
    public function changeTransmission(int $speed){
        if($speed > 0 && $speed <= 20) {
            $this->transmission = One::getInstance();
        }else if($speed > 20 && $speed <= 40){
            $this->transmission = Two::getInstance();
        }else if($speed > 40 && $speed <= 60){
            $this->transmission = Three::getInstance();
        }else if($speed > 60 && $speed <= 80){
            $this->transmission = Four::getInstance();
        }else if($speed > 80 && $speed <= 100){
            $this->transmission = Five::getInstance();
        }else if($speed > 100 && $speed <= 120){
            $this->transmission = Six::getInstance();
        }else if($speed == 0){
            $this->transmission = Zero::getInstance();
        }else if($speed < 0 && $speed >= -20){
            $this->transmission = Back::getInstance();
        }else{
            throw new Exception("无法到达的速度，请立即熄火停车检查！");
        }
    }
}
