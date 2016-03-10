<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/10
 * Time: 14:54
 */

namespace DesignPatterns\Creational\Builder;


/**
 * Director 是建造者模式的一部分，它知道建造者接口并通过建造者构建复杂对象。
 *
 * 可以通过依赖注入建造者的方式构造任何复杂对象
 */
class Director
{
    /**
     * 导演类无需知道细节
     *
     * @param BuilderInterface $builder
     * @return mixed
     */
    public function build(BuilderInterface $builder)
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}