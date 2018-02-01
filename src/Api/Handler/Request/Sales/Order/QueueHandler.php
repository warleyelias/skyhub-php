<?php

namespace SkyHub\Api\Handler\Request\Sales\Order;

use SkyHub\Api\Handler\Request\HandlerAbstract;

class QueueHandler extends HandlerAbstract
{

    /** @var string */
    protected $baseUrlPath = '/queues';


    /**
     * Retrieves and first order available in the queue in SkyHub.
     *
     * @return \SkyHub\Api\Handler\Response\HandlerInterface
     */
    public function orders()
    {
        /** @var \SkyHub\Api\Handler\Response\HandlerInterface $responseHandler */
        $responseHandler = $this->service()->get($this->baseUrlPath('orders'));
        return $responseHandler;
    }


    /**
     * Removes an order from the integration queue.
     *
     * @param string $orderId
     *
     * @return \SkyHub\Api\Handler\Response\HandlerInterface
     */
    public function delete($orderId)
    {
        /** @var \SkyHub\Api\Handler\Response\HandlerInterface $responseHandler */
        $responseHandler = $this->service()->delete($this->baseUrlPath("orders/{$orderId}"));
        return $responseHandler;
    }
}
