<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Behavioral\Observer\Observers;

use PHPDesignPattern\Pattern\Behavioral\Observer\Abstracts\CISSubscribe;

class XDCarYouth extends CISSubscribe
{
    public function __construct()
    {
        $this->name = '小豆汽车-青春版';
        $this->version = '1.0.5';
    }
}
