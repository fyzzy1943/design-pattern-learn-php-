<?php
/**
 * Date: 2016/4/8
 */

namespace Test;

use DesignPatterns\More\ServiceLocator\DatabaseService;
use DesignPatterns\More\ServiceLocator\LogService;
use DesignPatterns\More\ServiceLocator\ServiceLocator;

class ServiceLocatorTest
{
    private $logService;

    private $databaseService;

    private $serviceLocator;

    public function setUp()
    {
        $this->serviceLocator = new ServiceLocator();
        $this->logService = new LogService();
        $this->databaseService = new DatabaseService();

        $this->serviceLocator->add(
            'DesignPattern\More\ServiceLocator\LogServiceInterface',
            $this->logService
        );

        $this->serviceLocator->add(
            'DesignPattern\More\ServiceLocator\DatabaseServiceInterface',
            $this->databaseService,
            false
        );
    }

    public function testHas()
    {
        var_dump('testHas', $this->serviceLocator->has('DesignPattern\More\ServiceLocator\DatabaseServiceInterface'));
        var_dump($this->serviceLocator->has('DesignPattern\More\ServiceLocator\Joker'));
    }

    public function testService()
    {
        var_dump('testService');
        $log1 = $this->serviceLocator->get('DesignPattern\More\ServiceLocator\LogServiceInterface');
        $log2 = $this->serviceLocator->get('DesignPattern\More\ServiceLocator\LogServiceInterface');

        var_dump($log1, $log2, $log1 === $log2);
    }

    public function testNotShared()
    {
        var_dump('testNotShared');
        $database1 = $this->serviceLocator->get('DesignPattern\More\ServiceLocator\DatabaseServiceInterface');
        $database2 = $this->serviceLocator->get('DesignPattern\More\ServiceLocator\DatabaseServiceInterface');

        var_dump($database1, $database2, $database1 === $database2);
    }

    public function test()
    {
        echo '<div>ServiceLocator Test</div>';

        $this->setUp();
        $this->testHas();
        $this->testService();
        $this->testNotShared();
    }
}