<?php
/**
 * Date: 2016/3/21
 */

namespace DesignPatterns\Structural\DataMapper;

class Database
{
    private $data = array(
        1 => array(
            'id' => 1,
            'username' => 'Foo',
            'email' => 'Foo@x.x',
        ),
        2 => array(
            'id' => 2,
            'username' => 'Bar',
            'email' => 'Bar@x.x',
        ),
    );

    public function insert(array $data)
    {
        $this->$data[] = $data;
    }

    public function update(array $data)
    {
        if(!array_key_exists($data['id'], $this->data))
        {
            return null;
        }

        $this->data[$data['id']] = $data;
    }

    public function find($id)
    {
        if(!array_key_exists($id, $this->data))
        {
            return null;
        }

        return $this->data[$id];
    }

    public function all()
    {
        return $this->data;
    }
}