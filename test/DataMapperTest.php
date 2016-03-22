<?php
/**
 * Date: 2016/3/22
 */

namespace Test;

use DesignPatterns\Structural\DataMapper\Database;
use DesignPatterns\Structural\DataMapper\User;
use DesignPatterns\Structural\DataMapper\UserMapper;

class DataMapperTest
{
    protected $mapper;

    public function setUp()
    {
        $this->mapper = new UserMapper(new Database());
    }

    public function test()
    {
        echo '<div>DataMapper Test</div>';

        $this->setUp();
        $user = new User(3, 'test', 'test@x.x');
        $this->mapper->save($user);
        var_dump($this->mapper->find(1));
        var_dump($this->mapper->all());
    }
}