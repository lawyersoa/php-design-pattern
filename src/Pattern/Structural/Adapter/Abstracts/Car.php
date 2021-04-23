<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Structural\Adapter\Abstracts;

use PHPDesignPattern\Pattern\Structural\Adapter\Interfaces\BackCamera;
use function PHPDesignPattern\output;

abstract class Car
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
     * @var BackCamera 倒车影像系统
     */
    private $backCamera;

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
     * @return Car
     */
    public function setName(string $name): Car
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
     * @return Car
     */
    public function setBrand(string $brand): Car
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return ?BackCamera
     */
    public function getBackCamera(): ?BackCamera
    {
        return $this->backCamera;
    }

    /**
     * @param BackCamera $backCamera
     * @return Car
     */
    public function setBackCamera(BackCamera $backCamera): Car
    {
        $this->backCamera = $backCamera;
        return $this;
    }

    /**
     * 展示细节
     *
     * @return Car
     */
    public function showDetail()
    {
        output('名称:' . $this->getName());
        output('品牌:' . $this->getBrand());
        output('倒车影像:' . $this->getBackCamera()->display());
        return $this;
    }
}
