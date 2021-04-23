<?php

/*
 * This file is part of the lawyersoa/php-design-pattern.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern;

/**
 * 打印内容并中断
 *
 * @param mixed ...$content 数据
 */
function dump(...$content)
{
    var_dump(...$content);
    exit();
}

/**
 * 输出内容并换行
 *
 * @param mixed $content
 */
function output($content)
{
    echo $content . PHP_EOL;
}
