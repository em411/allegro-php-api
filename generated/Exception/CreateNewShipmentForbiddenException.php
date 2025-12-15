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

class CreateNewShipmentForbiddenException extends ForbiddenException
{
    /**
     * @var \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsPostResponse403
     */
    private $shipmentManagementShipmentsCreateCommandsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsPostResponse403 $shipmentManagementShipmentsCreateCommandsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipmentManagementShipmentsCreateCommandsPostResponse403 = $shipmentManagementShipmentsCreateCommandsPostResponse403;
        $this->response = $response;
    }

    public function getShipmentManagementShipmentsCreateCommandsPostResponse403(): \Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsPostResponse403
    {
        return $this->shipmentManagementShipmentsCreateCommandsPostResponse403;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
