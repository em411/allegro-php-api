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

class CreatePickupStatusForbiddenException extends ForbiddenException
{
    /**
     * @var \Em411\Allegro\Api\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse403
     */
    private $shipmentManagementPickupsCreateCommandsCommandIdGetResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse403 $shipmentManagementPickupsCreateCommandsCommandIdGetResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipmentManagementPickupsCreateCommandsCommandIdGetResponse403 = $shipmentManagementPickupsCreateCommandsCommandIdGetResponse403;
        $this->response = $response;
    }

    public function getShipmentManagementPickupsCreateCommandsCommandIdGetResponse403(): \Em411\Allegro\Api\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse403
    {
        return $this->shipmentManagementPickupsCreateCommandsCommandIdGetResponse403;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
