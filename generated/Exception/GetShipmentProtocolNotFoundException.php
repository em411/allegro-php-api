<?php

declare(strict_types=1);

/*
 * This file is part of em411's Allegro PHP API project.
 *
 * (c) em411 <contact@em411.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Em411\Allegro\Api\Exception;

class GetShipmentProtocolNotFoundException extends NotFoundException
{
    /**
     * @var \Em411\Allegro\Api\Model\ShipmentManagementProtocolPostResponse404
     */
    private $shipmentManagementProtocolPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\ShipmentManagementProtocolPostResponse404 $shipmentManagementProtocolPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Shipment Not Found');
        $this->shipmentManagementProtocolPostResponse404 = $shipmentManagementProtocolPostResponse404;
        $this->response = $response;
    }

    public function getShipmentManagementProtocolPostResponse404(): \Em411\Allegro\Api\Model\ShipmentManagementProtocolPostResponse404
    {
        return $this->shipmentManagementProtocolPostResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
