<?php

/*
 * This file is part of the lawyersoa/php-design-pattern.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use PHPDesignPattern\Pattern\Behavioral\Observer\Observers\{
    XDCarFamily,
    XDCarSport,
    XDCarYouth,
    XDCarLuxury
};
use PHPDesignPattern\Pattern\Behavioral\Observer\XDCarCIS;
use function PHPDesignPattern\{
    dump,
    output
};

require __DIR__ . '/../../vendor/autoload.php';

try {
    $newXDCarCIS = new XDCarCIS();
    $newXDCarFamily = new XDCarFamily();
    $newXDCarSport = new XDCarSport();
    $newXDCarYouth = new XDCarYouth();
    $newXDCarLuxury = new XDCarLuxury();
    //========== 绑定观察者 ==========
    $newXDCarCIS
        ->attach($newXDCarFamily)
        ->attach($newXDCarSport)
        ->attach($newXDCarYouth)
        ->attach($newXDCarLuxury)
    ;
    //========== 发布新版本 ==========
    $newXDCarCIS
        ->setVersion('2.0.0')
        ->notify()
    ;
    output('');
    //========== 移除观察者 ==========
    $newXDCarCIS
        ->detach($newXDCarYouth)
        ->setVersion('2.0.0')
        ->notify()
    ;
} catch (Exception $e) {
    dump($e->getMessage());
}

