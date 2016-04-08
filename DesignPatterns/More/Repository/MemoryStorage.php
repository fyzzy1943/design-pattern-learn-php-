<?php
/**
 * Date: 2016/4/8
 */

namespace DesignPatterns\More\Repository;

class MemoryStorage implements Storage
{
    private $data;
    private $lastId;

    public function __construct()
    {
        $this->data = array();
        $this->lastId = 0;
    }

    /**
     * @param $data
     */
    public function persist($data)
    {
        $this->data[++$this->lastId] = $data;
        return $this->lastId;
    }

    /**
     * @param $id
     */
    public function retrieve($id)
    {
        return isset($this->data[$id]) ? $this->data[$id] : null;
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        if (!isset($this->data[$id])) {
            return false;
        }

        $this->data[$id] = null;
        unset($this->data[$id]);

        return true;
    }
}