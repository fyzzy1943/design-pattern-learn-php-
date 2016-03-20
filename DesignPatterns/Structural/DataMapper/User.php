<?php
/**
 * Date: 2016/3/20
 */

namespace DesignPatterns\Structural\DataMapper;

class User
{
    /**
     * @var int
     */
    protected $userId;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $email;

    public function __construct($id = null, $username = null, $email = null)
    {
        $this->userId = $id;
        $this->username = $username;
        $this->email = $email;
    }

    /**
     * @return int|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param $userId int
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}