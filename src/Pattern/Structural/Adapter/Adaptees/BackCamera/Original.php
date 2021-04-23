<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Structural\Adapter\Adaptees\BackCamera;

use PHPDesignPattern\Pattern\Structural\Adapter\Interfaces\BackCamera;
use function PHPDesignPattern\output;

class Original implements BackCamera
{
    public function display()
    {
        output('这是原装倒车影像，原配稳定效果更好^_^');
    }
}
