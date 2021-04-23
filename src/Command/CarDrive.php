<?php

/*
 * This file is part of the lawyersoa/php-design-pattern.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Command;

use PHPDesignPattern\Kernel\Constants\RedisKey;
use PHPDesignPattern\Kernel\Exceptions\Exception;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use function PHPDesignPattern\{
    output,
    dump
};
use Predis\Client;

class CarDrive extends Command
{
    protected $fuelTank;

    protected static $defaultName = 'car:drive';

    public function __construct()
    {
        parent::__construct();
        $this->fuelTank = new Client('tcp://127.0.0.1:6379');
    }

    protected function configure(): void
    {
        $this
            ->setName('car:drive')
            ->setDescription('汽车驾驶操作')
            ->setHelp('汽车驾驶操作描述')
            ->setDefinition(
                new InputDefinition([
                    new InputOption('method', 'm', InputOption::VALUE_REQUIRED, '请求的方法'),
                    new InputOption('parameter', 'p', InputOption::VALUE_OPTIONAL, '请求的方法参数'),
                ])
            )
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     * @throws Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $method = $input->getOption('method');
        $parameter = json_decode($input->getOption('parameter'), true);
        if(!is_callable([$this, $method])){
            throw new Exception("{$method}对应的方法未定义。");
        }
        return call_user_func_array([$this, $method], $parameter) ? Command::SUCCESS : Command::FAILURE;
    }

    /**
     * 将汽车熄火
     *
     * @param int $instanceId 实例ID
     * @throws Exception
     */
    public function stopEngine(int $instanceId)
    {
        output("准备让{$instanceId}号汽车熄火...");
        $ret = $this->fuelTank->srem(RedisKey::CAR_RUNNING, $instanceId);
        if(!$ret){
            throw new Exception("{$instanceId}号汽车没有在运行呢～");
        }
        $this->fuelTank->del(RedisKey::CAR_RUNNING . $instanceId);
        output("{$instanceId}号汽车已经熄火。");
    }

    /**
     * 将汽车提速
     *
     * @param int $instanceId 实例ID
     * @param int $speed 速度
     */
    public function speedUp(int $instanceId, int $speed)
    {
        output("准备给{$instanceId}号汽车提速{$speed}迈...");
        $this->fuelTank->incrby(RedisKey::CAR_SPEED . $instanceId, $speed);
    }

}
