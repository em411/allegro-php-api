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

class GetPickupDetailsBadRequestException extends BadRequestException
{
    /**
     * @var \Em411\Allegro\Api\Model\ShipmentManagementPickupsPickupIdGetResponse400
     */
    private $shipmentManagementPickupsPickupIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\ShipmentManagementPickupsPickupIdGetResponse400 $shipmentManagementPickupsPickupIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipmentManagementPickupsPickupIdGetResponse400 = $shipmentManagementPickupsPickupIdGetResponse400;
        $this->response = $response;
    }

    public function getShipmentManagementPickupsPickupIdGetResponse400(): \Em411\Allegro\Api\Model\ShipmentManagementPickupsPickupIdGetResponse400
    {
        return $this->shipmentManagementPickupsPickupIdGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
