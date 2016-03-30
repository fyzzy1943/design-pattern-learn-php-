<?php
/**
 * Date: 2016/3/29
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

abstract class Handler
{
    /**
     * @var Handler
     */
    private $successor = null;

    /**
     * 非常神奇的方式
     * 通过这个方法可以追加多个处理类到责任链
     *
     * @param Handler $handler
     */
    final public function append(Handler $handler)
    {
        if (is_null($this->successor)) {
            $this->successor = $handler;
        } else {
            $this->successor->append($handler);
        }
    }

    /**
     * 使用模板方法模式来确保每个子类都不会忘记调用successor
     * 返回值表示是否被处理
     *
     * @param Request $request
     * @return bool
     */
    final public function handle(Request $request)
    {
        $request->forDebugOnly = get_called_class();
        $processed = $this->processing($request);
        if (!$processed) {
            if(!is_null($this->successor)) {
                $processed = $this->successor->handle($request);
            }
        }

        return $processed;
    }

    abstract protected function processing(Request $request);
}