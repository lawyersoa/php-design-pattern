<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\SimpleFactory;

use PHPDesignPattern\Pattern\Creational\SimpleFactory\Entities\Vehicle\{
    Bus,
    Car,
    Truck
};
use Exception;
use function PHPDesignPattern\output;

class SimpleFactory
{
    const AUTOMOBILE_TYPE_BUS = 'bus';
    const AUTOMOBILE_TYPE_CAR = 'car';
    const AUTOMOBILE_TYPE_TRUCK = 'truck';

    /**
     * @var string[]
     */
    public static $automobileTypeMapping = [
        self::AUTOMOBILE_TYPE_BUS => '公共汽车',
        self::AUTOMOBILE_TYPE_CAR => '小轿车',
        self::AUTOMOBILE_TYPE_TRUCK => '卡车',
    ];

    public function __construct()
    {
        $title = <<<EOF
 _    _   _____   _       _____   _____  ___  ___  _____
| |  | | |  ___| | |     /  __ \ |  _  | |  \/  | |  ___|
| |  | | | |__   | |     | /  \/ | | | | | .  . | | |__
| |/\| | |  __|  | |     | |     | | | | | |\/| | |  __|
\  /\  / | |___  | |____ | \__/\ \ \_/ / | |  | | | |___
 \/  \/  \____/  \_____/  \____/  \___/  \_|  |_/ \____/
EOF;
        output($title);

    }

    /**
     * 生产汽车
     *
     * @param string $type 汽车类型
     * @return Bus|Car|Truck
     * @throws Exception
     */
    public static function manufacture(string $type)
    {
        $name = self::$automobileTypeMapping[$type] ?? $type;
        output("接到订单，准备生产一辆{$name}");
        switch ($type) {
            case 'bus':
                $model = new Bus();
                break;
            case 'car':
                $model = new Car();
                break;
            case 'truck':
                $model = new Truck();
                break;
            default:
                throw new Exception("抱歉，目前还没有生产{$name}的能力！" . PHP_EOL);
        }
        output("{$name}已经生产完毕，编号：{$model}");
        return $model;
    }

    public function __destruct()
    {
        $title = <<<EOF
 _____   _____   _____  ______  ______  __   __  _____
|  __ \ |  _  | |  _  | |  _  \ | ___ \ \ \ / / |  ___|
| |  \/ | | | | | | | | | | | | | |_/ /  \ V /  | |__
| | __  | | | | | | | | | | | | | ___ \   \ /   |  __|
| |_\ \ \ \_/ / \ \_/ / | |/ /  | |_/ /   | |   | |___
 \____/  \___/   \___/  |___/   \____/    \_/   \____/
EOF;
        output($title);
    }

}
