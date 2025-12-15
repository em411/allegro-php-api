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

class AddOrderInvoicesMetadataUnprocessableEntityException extends UnprocessableEntityException
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
        parent::__construct('Some of the provided data is invalid or order does not allow an invoice or order\'s payment is rejected or previously uploaded file is still in scanning.');
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
