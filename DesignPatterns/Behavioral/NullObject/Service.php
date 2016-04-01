<?php
/**
 * Date: 2016/4/1
 */

namespace DesignPatterns\Behavioral\NullObject;

class Service
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(LoggerInterface $log)
    {
        $this->logger = $log;
    }

    public function doSomething()
    {
        // 简而言之， 此处无需使用if(!is_null($this->logger))
        $this->logger->log('yeah, this is ' . __METHOD__);
    }
}