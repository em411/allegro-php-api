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

class CreateProductOffersUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Em411\Allegro\Api\Model\SaleProductOffersPostResponse422
     */
    private $saleProductOffersPostResponse422;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\SaleProductOffersPostResponse422 $saleProductOffersPostResponse422, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unprocessable Entity');
        $this->saleProductOffersPostResponse422 = $saleProductOffersPostResponse422;
        $this->response = $response;
    }

    public function getSaleProductOffersPostResponse422(): \Em411\Allegro\Api\Model\SaleProductOffersPostResponse422
    {
        return $this->saleProductOffersPostResponse422;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
