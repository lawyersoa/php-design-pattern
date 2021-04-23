<?php

/*
 * This file is part of the lawyersoa/php-design-pattern.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Behavioral\State;

use PHPDesignPattern\Kernel\Constants\RedisKey;
use PHPDesignPattern\Pattern\Behavioral\State\Abstracts\Car as BaseCar;
use PHPDesignPattern\Pattern\Behavioral\State\Abstracts\Transmission;
use PHPDesignPattern\Pattern\Behavioral\State\States\Transmission\One;
use PHPDesignPattern\Pattern\Behavioral\State\States\Transmission\Zero;
use function PHPDesignPattern\dump;
use function PHPDesignPattern\output;
use PHPDesignPattern\Kernel\Exceptions\Exception;
use Predis\Client;

class Car extends BaseCar
{

    protected $fuelTank;
    protected $initialSpeed;
    protected $instanceId;

    public function __construct()
    {
        $this->transmission = Zero::getInstance();
        $this->speed = 0;
        $this->fuelTank = new Client('tcp://127.0.0.1:6379');
        $this->initialSpeed = 5;
        $this->instanceId = spl_object_id($this);
    }

    /**
     * 加速
     *
     * @throws Exception
     */
    private function _speedUp()
    {
        output("汽车正在运行中，当前时速：{$this->speed}迈，呜呜呜～");
        $this->transmission->handle($this, $this->speed);
    }

    /**
     * 启动汽车
     */
    public function startEngine()
    {
        output("{$this->instanceId}号汽车已经启动并开始运行...");
        $this->fuelTank->sadd(RedisKey::CAR_RUNNING, [$this->instanceId]);
        $this->fuelTank->set(RedisKey::CAR_SPEED . $this->instanceId, $this->initialSpeed);
        //========== 进入一档行驶 ==========
        $this->transmission = One::getInstance();
        while(1)
        {
            $this->speed = $this->fuelTank->get(RedisKey::CAR_SPEED . $this->instanceId);
            $this->_speedUp();
            if(!$this->fuelTank->sismember(RedisKey::CAR_RUNNING, $this->instanceId)){
                dump("{$this->instanceId}号汽车已经熄火");
            }
            sleep(2);
        }
    }

}
