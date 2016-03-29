<?php
/**
 * Date: 2016/3/29
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use DesignPatterns\Behavioral\ChainOfResponsibilities\Request;

/**
 * 责任链的重要特性：责任链中的每个处理器都不需要知道自己在责任链中的位置，也就是说， 每个处理器都不用理会后面是否还有处理器
 * 如果请求没有被处理， 那么责任链也就不能称之为责任链， 除非在请求到达时抛出异常
 *
 * Class SlowStorage
 * @package DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible
 */
class SlowStorage extends Handler
{
    /**
     * @var array
     */
    protected $data = array();

    public function __construct($data = array())
    {
        $this->data = $data;
    }

    protected function processing(Request $request)
    {
        if ('get' === $request->verb) {
            if (array_key_exists($request->key, $this->data)) {
                $request->response = $this->data[$request->key];

                return true;
            }
        }

        return false;
    }
}