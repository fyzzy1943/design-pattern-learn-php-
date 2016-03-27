<?php
/**
 * Date: 2016/3/27
 */

namespace Test;

use DesignPatterns\Structural\FluentInterface\Sql;

class FluentInterfaceTest
{
    public function test()
    {
        echo '<div>FluentInterface Test</div>';

        $instance = new Sql();
        $query = $instance->select(array('foo', 'bar'))
            ->from('foobar', 'f')
            ->where('f.bar = ?')
            ->getQuery();

        var_dump($query);
    }
}