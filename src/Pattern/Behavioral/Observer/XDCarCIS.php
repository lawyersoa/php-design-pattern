<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Behavioral\Observer;

use PHPDesignPattern\Pattern\Behavioral\Observer\Abstracts\CISPublish;
use function PHPDesignPattern\output;

class XDCarCIS extends CISPublish
{
    public function __construct()
    {
        parent::__construct();
        $this->name = '小豆汽车CIS';
        output("{$this->name}，不一样的体验～");
    }
}
