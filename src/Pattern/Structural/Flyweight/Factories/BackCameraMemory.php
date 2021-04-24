<?php

/*
 * This file is part of the lawyersoa/php-design-pattern.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Structural\Flyweight\Factories;

use PHPDesignPattern\Pattern\Structural\Flyweight\Systems\CarBackCamera;
use function PHPDesignPattern\output;

class BackCameraMemory
{
    protected static $memoryPool;

    public function __construct()
    {
        if(!isset(self::$memoryPool)){
            self::$memoryPool = [];
        }
    }

    /**
     * 获取倒车影像信息
     *
     * @param string $instanceId 实例编号
     * @return mixed|CarBackCamera
     */
    public function getBackCamera(string $instanceId)
    {
        if (!array_key_exists($instanceId, self::$memoryPool)) {
            $memory = new CarBackCamera($instanceId);
            self::$memoryPool[$instanceId] = $memory;
            return $memory;
        } else {
            return self::$memoryPool[$instanceId];
        }
    }
}
