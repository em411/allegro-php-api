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

class GetPickupProposalsForbiddenException extends ForbiddenException
{
    /**
     * @var \Em411\Allegro\Api\Model\ShipmentManagementPickupProposalsPostResponse403
     */
    private $shipmentManagementPickupProposalsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\ShipmentManagementPickupProposalsPostResponse403 $shipmentManagementPickupProposalsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipmentManagementPickupProposalsPostResponse403 = $shipmentManagementPickupProposalsPostResponse403;
        $this->response = $response;
    }

    public function getShipmentManagementPickupProposalsPostResponse403(): \Em411\Allegro\Api\Model\ShipmentManagementPickupProposalsPostResponse403
    {
        return $this->shipmentManagementPickupProposalsPostResponse403;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
