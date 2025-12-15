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

class GetShipmentCancellationStatusGatewayTimeoutException extends GatewayTimeoutException
{
    /**
     * @var \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse504
     */
    private $shipmentManagementShipmentsCancelCommandsCommandIdGetResponse504;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse504 $shipmentManagementShipmentsCancelCommandsCommandIdGetResponse504, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Gateway Timeout');
        $this->shipmentManagementShipmentsCancelCommandsCommandIdGetResponse504 = $shipmentManagementShipmentsCancelCommandsCommandIdGetResponse504;
        $this->response = $response;
    }

    public function getShipmentManagementShipmentsCancelCommandsCommandIdGetResponse504(): \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCancelCommandsCommandIdGetResponse504
    {
        return $this->shipmentManagementShipmentsCancelCommandsCommandIdGetResponse504;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
