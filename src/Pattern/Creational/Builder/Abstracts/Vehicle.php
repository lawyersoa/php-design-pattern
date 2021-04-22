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

use function PHPDesignPattern\output;

abstract class Vehicle
{
    /**
     * @var string 名称
     */
    private $name;

    /**
     * @var string 品牌
     */
    private $brand;

    /**
     * @var string 发动机
     */
    private $engine;

    /**
     * @var string 底盘
     */
    private $chassis;

    /**
     * @var string 车身
     */
    private $body;

    /**
     * @var string 电气设备
     */
    private $electricalEquipment;

    public function __toString()
    {
        return (string)spl_object_id($this);
    }

    /**
     * 获取名称
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 设置名称
     *
     * @param string $name 名称
     * @return Vehicle
     */
    public function setName(string $name): Vehicle
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 获取品牌
     *
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * 设置品牌
     *
     * @param string $brand 品牌
     * @return Vehicle
     */
    public function setBrand(string $brand): Vehicle
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * 获取发动机
     *
     * @return string
     */
    public function getEngine(): string
    {
        return $this->engine;
    }

    /**
     * 设置发动机
     *
     * @param string $engine 发动机
     * @return Vehicle
     */
    public function setEngine(string $engine): Vehicle
    {
        $this->engine = $engine;
        return $this;
    }

    /**
     * 获取底盘
     *
     * @return string
     */
    public function getChassis(): string
    {
        return $this->chassis;
    }

    /**
     * 设置底盘
     *
     * @param string $chassis 底盘
     * @return Vehicle
     */
    public function setChassis(string $chassis): Vehicle
    {
        $this->chassis = $chassis;
        return $this;
    }

    /**
     * 获取车身
     *
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * 设置车身
     *
     * @param string $body 车身
     * @return Vehicle
     */
    public function setBody(string $body): Vehicle
    {
        $this->body = $body;
        return $this;
    }

    /**
     * 获取电气设备
     *
     * @return string
     */
    public function getElectricalEquipment(): string
    {
        return $this->electricalEquipment;
    }

    /**
     * 设置电气设备
     *
     * @param string $electricalEquipment 电气设备
     * @return Vehicle
     */
    public function setElectricalEquipment(string $electricalEquipment): Vehicle
    {
        $this->electricalEquipment = $electricalEquipment;
        return $this;
    }

    /**
     * 展示细节
     *
     * @return Vehicle
     */
    public function showDetail()
    {
        output('名称:' . $this->getName());
        output('品牌:' . $this->getBrand());
        output('发动机:' . $this->getEngine());
        output('底盘:' . $this->getChassis());
        output('车身:' . $this->getBody());
        output('电气系统:' . $this->getElectricalEquipment());
        return $this;
    }
}
