<?php

/*
 * This file is part of the lawyersoa/php-design-pattern.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Structural\Flyweight\Abstracts;

use function PHPDesignPattern\output;

abstract class BackCamera
{
    protected $name;

    protected $instanceId;

    public function __construct(string $instanceId)
    {
        $this->instanceId = $instanceId;
    }

    public function display()
    {
        output("正在播放编号为{$this->instanceId}的影像视频，影像系统为：{$this->name}...");
    }
}
