<?php
/**
 * Date: 2016/3/20
 */

namespace DesignPatterns\Structural\DataMapper;

class UserMapper
{
    /**
     * @var Database
     */
    protected $adapter;

    public function __construct(Database $database)
    {
        $this->adapter = $database;
    }

    public function save(User $user)
    {
        $data = array(
            'id' => $user->getUserId(),
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
        );

        // 如果没有则创建， 如果有则更新
        if (null === ($this->adapter->find($user->getUserId()))) {
//            unset($data['id']);
            $this->adapter->insert($data);

            return true;
        } else {
            $this->adapter->update($data);

            return true;
        }
    }

    public function find($id)
    {
        $result = $this->adapter->find($id);

        if (null == $result) {
            return null;
        }

        return $this->mapObject($result);
    }

    public function all()
    {
        $resultSet = $this->adapter->all();
        $entries = array();

        foreach ($resultSet as $row) {
            $entries[] = $this->mapObject($row);
        }

        return$resultSet;
    }

    protected function mapObject(array $data)
    {
        $entry = new User();
        $entry->setUserId($data['id']);
        $entry->setUsername($data['username']);
        $entry->setEmail($data['email']);

        return $entry;
    }
}