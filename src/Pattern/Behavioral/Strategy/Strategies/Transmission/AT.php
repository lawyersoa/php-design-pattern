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

class AT implements Transmission
{
    /**
     * @var string 名称
     */
    private $name;

    public function __construct()
    {
        $this->name = 'AT自动变速器';

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
     * @return AT|void
     */
    public function speedUp()
    {
        output("采用{$this->name}，技术更成熟、生产工艺更完善、稳定性更好、制造成本更低");
    }
}
