<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/10
 * Time: 15:16
 */

namespace Test;


use DesignPatterns\Creational\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\BuilderInterface;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;

class BuilderTest
{
    /**
     * @var Director
     */
    protected $director;

    protected function setUp()
    {
        $this->director = new Director();
    }

    public function getBuilder()
    {
        return array(
            'bike' => new BikeBuilder(),
            'car' => new CarBuilder(),
        );
    }

    public function Build(BuilderInterface $builder)
    {
        return $this->director->build($builder);
    }

    public function test()
    {
        echo '<div>Builder Test</div>';

        $this->setUp();
        $builder = $this->getBuilder();
        $carVehicle = $this->Build($builder['car']);
        $bikeVehicle = $this->Build($builder['bike']);

        var_dump($carVehicle);
        var_dump($bikeVehicle);
    }
}