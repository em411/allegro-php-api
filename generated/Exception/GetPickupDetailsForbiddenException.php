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

class GetPickupDetailsForbiddenException extends ForbiddenException
{
    /**
     * @var \Em411\Allegro\Api\Model\ShipmentManagementPickupsPickupIdGetResponse403
     */
    private $shipmentManagementPickupsPickupIdGetResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\ShipmentManagementPickupsPickupIdGetResponse403 $shipmentManagementPickupsPickupIdGetResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipmentManagementPickupsPickupIdGetResponse403 = $shipmentManagementPickupsPickupIdGetResponse403;
        $this->response = $response;
    }

    public function getShipmentManagementPickupsPickupIdGetResponse403(): \Em411\Allegro\Api\Model\ShipmentManagementPickupsPickupIdGetResponse403
    {
        return $this->shipmentManagementPickupsPickupIdGetResponse403;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
