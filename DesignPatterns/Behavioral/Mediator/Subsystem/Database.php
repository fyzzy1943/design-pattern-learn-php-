<?php
/**
 * Date: 2016/3/31
 */

namespace DesignPatterns\Behavioral\Mediator\Subsystem;

use DesignPatterns\Behavioral\Mediator\Colleague;

class Database extends Colleague
{
    public function getData()
    {
        return 'World';
    }
}