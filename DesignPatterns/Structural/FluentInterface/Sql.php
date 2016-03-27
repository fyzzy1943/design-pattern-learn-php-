<?php
/**
 * Date: 2016/3/27
 */

namespace DesignPatterns\Structural\FluentInterface;

class Sql
{
    /**
     * @var array
     */
    protected $fields = array();

    /**
     * @var array
     */
    protected $from = array();

    /**
     * @var array
     */
    protected $where = array();

    /**
     * 添加select
     *
     * @param array $fields
     * @return SQL
     */
    public function select(array $fields = array())
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * 添加from
     *
     * @param $table
     * @param $alias
     * @return SQL
     */
    public function from($table, $alias)
    {
        $this->from[] = $table . ' AS ' . $alias;

        return $this;
    }

    /**
     * 添加where
     *
     * @param $condition
     * @return $this
     */
    public function where($condition)
    {
        $this->where[] = $condition;

        return $this;
    }

    public function getQuery()
    {
        return 'SELECT ' . implode(',', $this->fields)
            . ' FROM ' . implode(',', $this->from)
            . ' WHERE ' . implode(' AND ', $this->where);
    }
}