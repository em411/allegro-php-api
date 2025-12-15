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

class CreateNewShipmentGatewayTimeoutException extends GatewayTimeoutException
{
    /**
     * @var \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsPostResponse504
     */
    private $shipmentManagementShipmentsCreateCommandsPostResponse504;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsPostResponse504 $shipmentManagementShipmentsCreateCommandsPostResponse504, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Gateway Timeout');
        $this->shipmentManagementShipmentsCreateCommandsPostResponse504 = $shipmentManagementShipmentsCreateCommandsPostResponse504;
        $this->response = $response;
    }

    public function getShipmentManagementShipmentsCreateCommandsPostResponse504(): \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsPostResponse504
    {
        return $this->shipmentManagementShipmentsCreateCommandsPostResponse504;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
