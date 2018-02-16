<?php

namespace SkyHub\Api\EntityInterface\Sales;

use SkyHub\Api\EntityInterface\EntityAbstract;
use SkyHub\Api\Handler\Request\Sales\OrderHandler;

class Order extends EntityAbstract
{
    
    /**
     * @param int   $page
     * @param int   $perPage
     * @param null  $saleSystem
     * @param array $statuses
     *
     * @return \SkyHub\Api\Handler\Response\HandlerInterface
     */
    public function orders($page = 1, $perPage = 30, $saleSystem = null, array $statuses = [])
    {
        /** @var OrderHandler $handler */
        $handler = $this->requestHandler();
        return $handler->orders($page, $perPage, $saleSystem, $statuses);
    }


    /**
     * @param string $orderId
     *
     * @return \SkyHub\Api\Handler\Response\HandlerInterface
     */
    public function order($orderId)
    {
        /** @var OrderHandler $handler */
        $handler = $this->requestHandler();
        return $handler->order($orderId);
    }


    /**
     * @param string $orderId
     * @param string $invoiceKey
     *
     * @return \SkyHub\Api\Handler\Response\HandlerInterface
     */
    public function invoice($orderId, $invoiceKey)
    {
        /** @var OrderHandler $handler */
        $handler = $this->requestHandler();
        return $handler->invoice($orderId, $invoiceKey);
    }


    /**
     * @param string $orderId
     *
     * @return \SkyHub\Api\Handler\Response\HandlerInterface
     */
    public function cancel($orderId)
    {
        /** @var OrderHandler $handler */
        $handler = $this->requestHandler();
        return $handler->cancel($orderId);
    }


    /**
     * @param string $orderId
     *
     * @return \SkyHub\Api\Handler\Response\HandlerInterface
     */
    public function delivery($orderId)
    {
        /** @var OrderHandler $handler */
        $handler = $this->requestHandler();
        return $handler->delivery($orderId);
    }


    /**
     * @param string $orderId
     *
     * @return \SkyHub\Api\Handler\Response\HandlerInterface
     */
    public function shipmentLabels($orderId)
    {
        /** @var OrderHandler $handler */
        $handler = $this->requestHandler();
        return $handler->shipmentLabels($orderId);
    }


    /**
     * @param string $orderId
     * @param array  $items
     * @param string $trackCode
     * @param string $trackCarrier
     * @param string $trackMethod
     * @param string $trackUrl
     *
     * @return \SkyHub\Api\Handler\Response\HandlerInterface
     */
    public function shipment($orderId, array $items, $trackCode, $trackCarrier, $trackMethod, $trackUrl)
    {
        /** @var OrderHandler $handler */
        $handler = $this->requestHandler();
        return $handler->shipment($orderId, $items, $trackCode, $trackCarrier, $trackMethod, $trackUrl);
    }
}
