<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Structural\Facade;

use PHPDesignPattern\Pattern\Structural\Facade\Systems\{
    DetectingSystem,
    PowerDistributionSystem,
    PowerSupplySystem,
    PowerSystem
};
use function PHPDesignPattern\output;

class Car
{
    protected $detectingSystem;
    protected $powerDistributionSystem;
    protected $powerSupplySystem;
    protected $powerSystem;

    public function __construct()
    {
        $this->detectingSystem = new DetectingSystem();
        $this->powerDistributionSystem = new PowerDistributionSystem();
        $this->powerSupplySystem = new PowerSupplySystem();
        $this->powerSystem = new PowerSystem();
    }

    public function startEngine()
    {
        output('汽车正在启动中，准备检测各系统是否正常...');
        $this->detectingSystem->report();
        $this->powerDistributionSystem->report();
        $this->powerSupplySystem->report();
        $this->powerSystem->report();
        output('各系统检测正常，请放心驾驶。');
    }
}
