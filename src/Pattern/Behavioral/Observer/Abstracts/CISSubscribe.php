<?php

/*
 * This file is part of the lawyersoa/php-design-pattern.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Behavioral\Observer\Abstracts;

use function PHPDesignPattern\output;

abstract class CISSubscribe
{
    protected $version;

    protected $name;

    protected $canUpgrade = true;

    /**
     * 系统升级
     *
     * @param CISPublish $pub 发布者
     */
    function upgrade(CISPublish $pub)
    {
        $newVersion = $pub->getVersion();
        if(version_compare($newVersion, $this->version)){
            output("{$this->name}车主您好，发现新版本{$newVersion}，现在可以去更新啦～");
        }else{
            output("{$this->name}车主您好，当前版本已经是最新版本，无需更新。");
        }
    }

    /**
     * 判断是否可以升级
     *
     * @return bool
     */
    public function canUpgrade()
    {
        return $this->canUpgrade;
    }
}
