<?php
/**
 * Date: 2016/3/31
 */

namespace DesignPatterns\Behavioral\Mediator;

use DesignPatterns\Behavioral\Mediator\Subsystem\Client;
use DesignPatterns\Behavioral\Mediator\Subsystem\Database;
use DesignPatterns\Behavioral\Mediator\Subsystem\Server;

class Mediator implements MediatorInterface
{
    /**
     * @var Server
     */
    protected $server;

    /**
     * @var Database
     */
    protected $database;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @param Database $db
     * @param Client $cl
     * @param Server $srv
     */
    public function setColleague(Database $db, Client $cl, Server $srv)
    {
        $this->database = $db;
        $this->client = $cl;
        $this->server = $srv;
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb()
    {
        return $this->database->getData();
    }

    public function sendResponse($content)
    {
        $this->client->output($content);
    }
}