<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\Builder\Interfaces;

interface Builder
{
    /**
     * 构建发动机
     *
     * @return $this
     */
    public function buildEngine();

    /**
     * 构建底盘
     *
     * @return $this
     */
    public function buildChassis();

    /**
     * 构建车身
     *
     * @return $this
     */
    public function buildBody();

    /**
     * 构建电气设备
     *
     * @return $this
     */
    public function buildElectricalEquipment();

    /**
     * 获取新汽车
     *
     * @return $this
     */
    public function getNewVehicle();
}
