<?php
/**
 * Date: 2016/4/6
 */

namespace DesignPatterns\Behavioral\TemplateMethod;

/**
 * Class BeachJourney 在海滩度假~
 * @package DesignPatterns\Behavioral\TemplateMethod
 */
class BeachJourney extends Journey
{
    protected function enjoyVacation()
    {
        echo 'Swimming and sun-bathing', PHP_EOL;
    }
}