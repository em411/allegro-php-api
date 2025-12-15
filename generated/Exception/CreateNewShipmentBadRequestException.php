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

class CreateNewShipmentBadRequestException extends BadRequestException
{
    /**
     * @var \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsPostResponse400
     */
    private $shipmentManagementShipmentsCreateCommandsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsPostResponse400 $shipmentManagementShipmentsCreateCommandsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipmentManagementShipmentsCreateCommandsPostResponse400 = $shipmentManagementShipmentsCreateCommandsPostResponse400;
        $this->response = $response;
    }

    public function getShipmentManagementShipmentsCreateCommandsPostResponse400(): \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsPostResponse400
    {
        return $this->shipmentManagementShipmentsCreateCommandsPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
