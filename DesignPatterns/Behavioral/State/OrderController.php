<?php
/**
 * Date: 2016/4/6
 */

namespace DesignPatterns\Behavioral\State;

class OrderController
{
    public function shipAction($id)
    {
        $order = OrderFactory::getOrder($id);
        try {
            $order->shipOrder();
        } catch (\Exception $e) {
            // 处理错误
            var_dump($e->getMessage());
        }

        // 发送相应到服务器
    }

    public function completeAction($id)
    {
        $order = OrderFactory::getOrder($id);
        try {
            $order->completeOrder();
        } catch (\Exception $e) {
            // 处理错误
            var_dump($e->getMessage());
        }

        // 发送相应到服务器
    }
}