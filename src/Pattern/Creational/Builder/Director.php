<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\Builder;

use PHPDesignPattern\Pattern\Creational\Builder\Abstracts\Builder;

class Director
{
    /**
     * @var Builder 构建者
     */
    private $builder;

    /**
     * 获取构建者
     *
     * @return Builder
     */
    public function getBuilder(): Builder
    {
        return $this->builder;
    }

    /**
     * 设置构建者
     *
     * @param Builder $builder 构建者
     * @return Director
     */
    public function setBuilder(Builder $builder): Director
    {
        $this->builder = $builder;
        return $this;
    }

    /**
     * 构建程序
     *
     * @return Builder
     */
    public function build()
    {
        return $this->builder
            ->buildEngine()
            ->buildChassis()
            ->buildBody()
            ->buildElectricalEquipment()
        ;
    }
}
