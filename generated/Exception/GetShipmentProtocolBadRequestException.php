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

class GetShipmentProtocolBadRequestException extends BadRequestException
{
    /**
     * @var \Em411\Allegro\Api\Model\ShipmentManagementProtocolPostResponse400
     */
    private $shipmentManagementProtocolPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\ShipmentManagementProtocolPostResponse400 $shipmentManagementProtocolPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipmentManagementProtocolPostResponse400 = $shipmentManagementProtocolPostResponse400;
        $this->response = $response;
    }

    public function getShipmentManagementProtocolPostResponse400(): \Em411\Allegro\Api\Model\ShipmentManagementProtocolPostResponse400
    {
        return $this->shipmentManagementProtocolPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
