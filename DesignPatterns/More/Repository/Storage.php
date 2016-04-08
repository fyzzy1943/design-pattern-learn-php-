<?php
/**
 * Date: 2016/4/8
 */

namespace DesignPatterns\More\Repository;

interface Storage
{
    /**
     * 持久化数据方法
     * 返回新创建的对象ID
     *
     * @param $data
     * @return mixed
     */
    public function persist($data);

    /**
     * 通过指定ID返回数据
     * 如果为空返回null
     *
     * @param $id
     * @return mixed
     */
    public function retrieve($id);

    /**
     * 通过指定id删除数据
     * 如果数据不存在返回false，删除成功返回true
     *
     * @param $id
     * @return mixed
     */
    public function delete($id);
}