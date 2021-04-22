<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\Builder\Abstracts;

use PHPDesignPattern\Pattern\Creational\Builder\Interfaces\Builder as BuilderInterface;

abstract class Builder implements BuilderInterface
{
    /**
     * @var Vehicle
     */
    protected $vehicle;

    /**
     * 构建发动机
     *
     * @return $this
     */
    public function buildEngine()
    {
        $this->vehicle->setEngine($this->vehicle->getName() . $this->vehicle->getBrand() . '专用发动机');
        return $this;
    }

    /**
     * 构建底盘
     *
     * @return $this
     */
    public function buildChassis()
    {
        $this->vehicle->setChassis($this->vehicle->getName() . $this->vehicle->getBrand() . '专用底盘');
        return $this;
    }

    /**
     * 构建车身
     *
     * @return $this
     */
    public function buildBody()
    {
        $this->vehicle->setBody($this->vehicle->getName() . $this->vehicle->getBrand() . '专用车身');
        return $this;
    }

    /**
     * 构建电气设备
     *
     * @return $this
     */
    public function buildElectricalEquipment()
    {
        $this->vehicle->setElectricalEquipment($this->vehicle->getName() . $this->vehicle->getBrand() . '专用电气设备');
        return $this;
    }

    /**
     * 获取新汽车
     *
     * @return Vehicle
     */
    public function getNewVehicle()
    {
        return $this->vehicle->showDetail();
    }
}
