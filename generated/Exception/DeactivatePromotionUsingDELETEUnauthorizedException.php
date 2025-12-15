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

class DeactivatePromotionUsingDELETEUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Em411\Allegro\Api\Model\AuthError
     */
    private $authError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Em411\Allegro\Api\Model\AuthError $authError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized action');
        $this->authError = $authError;
        $this->response = $response;
    }

    public function getAuthError(): \Em411\Allegro\Api\Model\AuthError
    {
        return $this->authError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
