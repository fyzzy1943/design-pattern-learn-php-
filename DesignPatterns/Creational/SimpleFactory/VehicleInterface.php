<?php
/**
 * Date: 2016/3/14
 */

namespace DesignPatterns\Creational\SimpleFactory;

interface VehicleInterface
{
    /**
     * @param mixed $destination
     * @return mixed
     */
    public function driveTo($destination);
}