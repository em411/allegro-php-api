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

class GetPickupDetailsNotFoundException extends NotFoundException
{
    /**
     * @var \Em411\Allegro\Api\Model\ShipmentManagementPickupsPickupIdGetResponse404
     */
    private $shipmentManagementPickupsPickupIdGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\ShipmentManagementPickupsPickupIdGetResponse404 $shipmentManagementPickupsPickupIdGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipmentManagementPickupsPickupIdGetResponse404 = $shipmentManagementPickupsPickupIdGetResponse404;
        $this->response = $response;
    }

    public function getShipmentManagementPickupsPickupIdGetResponse404(): \Em411\Allegro\Api\Model\ShipmentManagementPickupsPickupIdGetResponse404
    {
        return $this->shipmentManagementPickupsPickupIdGetResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
