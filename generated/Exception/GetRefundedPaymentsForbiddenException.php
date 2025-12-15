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

class GetRefundedPaymentsForbiddenException extends ForbiddenException
{
    /**
     * @var \Em411\Allegro\Api\Model\PaymentsRefundsGetResponse403
     */
    private $paymentsRefundsGetResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\PaymentsRefundsGetResponse403 $paymentsRefundsGetResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->paymentsRefundsGetResponse403 = $paymentsRefundsGetResponse403;
        $this->response = $response;
    }

    public function getPaymentsRefundsGetResponse403(): \Em411\Allegro\Api\Model\PaymentsRefundsGetResponse403
    {
        return $this->paymentsRefundsGetResponse403;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
