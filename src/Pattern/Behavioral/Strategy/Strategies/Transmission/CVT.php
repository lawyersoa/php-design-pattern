<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Behavioral\Strategy\Strategies\Transmission;

use PHPDesignPattern\Pattern\Behavioral\Strategy\Interfaces\Transmission;
use function PHPDesignPattern\output;

class CVT implements Transmission
{
    /**
     * @var string 名称
     */
    private $name;

    public function __construct()
    {
        $this->name = 'CVT无极变速器';

    }
    /**
     * 获取名称
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 加速
     *
     * @return CVT|void
     */
    public function speedUp()
    {
        output("采用{$this->name}，让汽车换挡时非常平稳顺畅");
    }
}
