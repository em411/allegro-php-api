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

class SetOrderLineItemsSerialNumbersUsingPOSTUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Em411\Allegro\Api\Model\ErrorsHolder
     */
    private $errorsHolder;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\ErrorsHolder $errorsHolder, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Some of the provided data is invalid, e.g. quantity of serial numbers exceeds the quantity of the line item, or the number of serial number modifications is exceeded, or line item ids in the request body are duplicated.');
        $this->errorsHolder = $errorsHolder;
        $this->response = $response;
    }

    public function getErrorsHolder(): \Em411\Allegro\Api\Model\ErrorsHolder
    {
        return $this->errorsHolder;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
