<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/7
 * Time: 16:54
 */

namespace Test;

use DesignPatterns\Creational\AbstractFactory\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;

class AbstractFactoryTest
{
    public function getFactories()
    {
        return array(
            'JsonFactory' => new JsonFactory(),
            'HtmlFactory' => new HtmlFactory(),
        );
    }

    /**
     * 这里是工厂的客户端，我们无需关心传递过来的是什么工厂类，
     * 只需以我们想要的方式渲染任意想要的组件即可。
     *
     * @dataProvider getFactories
     */
    public function ComponentCreation(AbstractFactory $factory)
    {
        $article = array(
            $factory->createText('Title'),
            $factory->createPicture('img/index.jpg', 'index'),
            $factory->createText('subtitle'),
        );

        return $article;
    }

    public function test()
    {
        echo '<div>AbstractFactory Test</div>';

        $factories = $this->getFactories();
        var_dump($this->ComponentCreation($factories['JsonFactory']));
        var_dump($this->ComponentCreation($factories['HtmlFactory']));
    }
}