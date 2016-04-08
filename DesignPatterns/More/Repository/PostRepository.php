<?php
/**
 * Date: 2016/4/8
 */

namespace DesignPatterns\More\Repository;

/**
 * Post对应的Repository
 * 该类介于数据实体层（Post）和访问对象层（Storage）之间
 *
 * Repository封装了持久化对象到数据存储器以及在展示层显示面向对象的视图操作
 *
 * Repository还实现了领域层和数据映射层的分离和单向依赖
 *
 * Class PostRepository
 * @package DesignPatterns\More\Repository
 */
class PostRepository
{
    private $persistence;

    public function __construct(Storage $persistence)
    {
        $this->persistence = $persistence;
    }

    public function getById($id)
    {
        $arrayData = $this->persistence->retrieve($id);
        if (is_null($arrayData)) {
            return null;
        }

        $post = new Post();
        $post->setId($arrayData['id']);
        $post->setAuthor($arrayData['author']);
        $post->setCreated($arrayData['created']);
        $post->setText($arrayData['text']);
        $post->setTitle($arrayData['title']);

        return $post;
    }

    public function save(Post $post)
    {
        $id = $this->persistence->persist(array(
            'author'=>$post->getAuthor(),
            'created'=>$post->getCreated(),
            'text'=>$post->getText(),
            'title'=>$post->getTitle(),
        ));

        $post->setId($id);
        return $post;
    }

    public function delete(Post $post)
    {
        return $this->persistence->delete($post->getId());
    }
}