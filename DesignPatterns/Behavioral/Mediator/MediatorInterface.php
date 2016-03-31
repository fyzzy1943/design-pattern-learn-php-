<?php
/**
 * Date: 2016/3/31
 */

namespace DesignPatterns\Behavioral\Mediator;

interface MediatorInterface
{
    /**
     * 发送响应
     *
     * @param string $content
     * @return mixed
     */
    public function sendResponse($content);

    /**
     * 发起请求
     *
     * @return mixed
     */
    public function makeRequest();

    /**
     * 查询数据库
     *
     * @return mixed
     */
    public function queryDb();
}