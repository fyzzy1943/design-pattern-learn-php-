<?php
/**
 * Date: 2016/4/8
 */

namespace DesignPatterns\More\ServiceLocator;

class ServiceLocator implements ServiceLocatorInterface
{
    /**
     * all services
     *
     * @var array
     */
    private $services;

    /**
     * the services which have an instance
     *
     * @var array
     */
    private $instantiated;

    /**
     * true if a service can be shared
     *
     * @var array
     */
    private $shared;

    public function __construct()
    {
        $this->instantiated = array();
        $this->services = array();
        $this->shared = array();
    }

    /**
     * registers a service with specific interface
     *
     * @param $interface
     * @param $service
     * @param bool $share
     */
    public function add($interface, $service, $share = true)
    {
        /**
         * when you add a service, you should register it
         * with its interface or with a string that you can use
         * in the future even if you will change the service implementation
         */

        if (is_object($service) && $share) {
            $this->instantiated[$interface] = $service;
        }
        $this->services[$interface] = (is_object($service) ? get_class($service) : $service);
        $this->shared[$interface] = $share;
    }

    public function has($interface)
    {
        return (isset($this->services[$interface]) || isset($this->instantiated[$interface]));
    }

    public function get($interface)
    {
        // retrieves the instance if it exists and it is shared
        if (isset($this->instantiated[$interface]) && $this->shared[$interface]) {
            return $this->instantiated[$interface];
        }

        // otherwise gets the service registered
        $service = $this->services[$interface];

        // you should check if the service class exists and
        // the class is instantiable

        // this example is a simple implementation, but
        // when you create a service, you can decide
        // if $service is a factory or a class
        // by registering a factory you can create your services
        // using the DependencyInjection pattern

        // ...

        // create the service object
        $object = new $service();

        // and saves it if the service must be shared
        if ($this->shared[$interface]) {
            $this->instantiated[$interface] = $object;
        }

        return $object;
    }
}