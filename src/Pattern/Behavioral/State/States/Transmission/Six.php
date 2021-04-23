<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Behavioral\State\States\Transmission;

use PHPDesignPattern\Kernel\Exceptions\Exception;
use PHPDesignPattern\Pattern\Behavioral\State\Abstracts\Car;
use PHPDesignPattern\Pattern\Behavioral\State\Abstracts\Transmission;
use function PHPDesignPattern\output;

class Six extends Transmission
{
    /**
     * @var object 实例
     */
    private static $instance;

    /**
     * @var string 档位名称
     */
    private static $name = '六档';

    /**
     * @var int 最小速度
     */
    private $minSpeed;

    /**
     * @var int 最大速度
     */
    private $maxSpeed;

    private function __construct()
    {
        $this->minSpeed = 100;
        $this->maxSpeed = 120;
    }

    private function __clone()
    {

    }

    /**
     * 获取实例
     *
     * @return object|Zero
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * 速度调控
     *
     * @param Car $car 汽车实例
     * @param int $speed 速度
     * @throws Exception
     */
    public function handle(Car $car, int $speed)
    {
        if($speed >= $this->minSpeed && $speed <= $this->maxSpeed){
            output("当前档位：" . self::$name);
        }else{
            output("当前速度({$speed}迈)与档位(" . self::$name . " [{$this->minSpeed}, {$this->maxSpeed}])不匹配，系统将进行自动换挡～");
            $car->changeTransmission($speed);
        }
    }
}
