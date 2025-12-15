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

class GetOfferSmartClassificationGETBadRequestException extends BadRequestException
{
    /**
     * @var \Em411\Allegro\Api\Model\SaleOffersOfferIdSmartGetResponse400
     */
    private $saleOffersOfferIdSmartGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\SaleOffersOfferIdSmartGetResponse400 $saleOffersOfferIdSmartGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->saleOffersOfferIdSmartGetResponse400 = $saleOffersOfferIdSmartGetResponse400;
        $this->response = $response;
    }

    public function getSaleOffersOfferIdSmartGetResponse400(): \Em411\Allegro\Api\Model\SaleOffersOfferIdSmartGetResponse400
    {
        return $this->saleOffersOfferIdSmartGetResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
