<?php
/**
 * Date: 2016/4/8
 */

namespace DesignPatterns\More\ServiceLocator;

interface ServiceLocatorInterface
{
    /**
     * checks if a service is registered
     *
     * @param $interface
     * @return mixed
     */
    public function has($interface);

    /**
     * gets the service registered for the interface
     *
     * @param $interface
     * @return mixed
     */
    public function get($interface);
}