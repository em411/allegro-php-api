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

class GetRefundDispositionsReportNotAcceptableException extends NotAcceptableException
{
    /**
     * @var \Em411\Allegro\Api\Model\FulfillmentRefundDispositionsValidationErrorResponse
     */
    private $fulfillmentRefundDispositionsValidationErrorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\FulfillmentRefundDispositionsValidationErrorResponse $fulfillmentRefundDispositionsValidationErrorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Acceptable');
        $this->fulfillmentRefundDispositionsValidationErrorResponse = $fulfillmentRefundDispositionsValidationErrorResponse;
        $this->response = $response;
    }

    public function getFulfillmentRefundDispositionsValidationErrorResponse(): \Em411\Allegro\Api\Model\FulfillmentRefundDispositionsValidationErrorResponse
    {
        return $this->fulfillmentRefundDispositionsValidationErrorResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
