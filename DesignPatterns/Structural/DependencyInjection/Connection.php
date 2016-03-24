<?php
/**
 * Date: 2016/3/24
 */

namespace DesignPatterns\Structural\DependencyInjection;

class Connection
{
    protected $configuration;

    protected $host;

    public function __construct(Parameters $config)
    {
        $this->configuration = $config;
    }

    public function connect()
    {
        $host = $this->configuration->get('host');

        // 连接， 验证， 等

        // 验证成功
        $this->host = $host;
    }

    public function getHost()
    {
        return $this->host;
    }
}