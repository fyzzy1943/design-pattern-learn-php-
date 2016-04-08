<?php
/**
 * Date: 2016/4/8
 */

namespace Test;

use DesignPatterns\More\Repository\MemoryStorage;
use DesignPatterns\More\Repository\Post;
use DesignPatterns\More\Repository\PostRepository;

class RepositoryTest
{
    protected $repository;

    protected $storage;

    public function setUp()
    {
        $this->storage = new MemoryStorage();
        $this->repository = new PostRepository($this->storage);
    }

    public function test()
    {
        echo '<div>Repository Test</div>';

        $this->setUp();
        $post = new Post();
        $post->setId(12);
        $post->setTitle('hello');
        $post->setAuthor('Tom');
        $post->setCreated('2011/03/02');
        $post->setText('hello world');

        var_dump($this->repository->save($post));
        var_dump($this->repository->delete($post));
    }
}
/**
 * 到这里设计模式的入门就完成了，
 * 再次感谢https://github.com/domnikl/DesignPatternsPHP
 * 和http://laravelacademy.org/post/2465.html
 *
 * 不去实际应用，还是很难体会到设计模式的作用
 */