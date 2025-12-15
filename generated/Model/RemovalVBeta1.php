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

namespace Em411\Allegro\Api\Model;

class RemovalVBeta1 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Date until a removal request can be submitted in ISO 8601 format.
     *
     * @var string|null
     */
    protected $possibleTo;
    /**
     * Submitted removal request, null if removal was not requested.
     *
     * @var RemovalRequestVBeta1|null
     */
    protected $request;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Date until a removal request can be submitted in ISO 8601 format.
     */
    public function getPossibleTo(): ?string
    {
        return $this->possibleTo;
    }

    /**
     * Date until a removal request can be submitted in ISO 8601 format.
     */
    public function setPossibleTo(?string $possibleTo): self
    {
        $this->initialized['possibleTo'] = true;
        $this->possibleTo = $possibleTo;

        return $this;
    }

    /**
     * Submitted removal request, null if removal was not requested.
     */
    public function getRequest(): ?RemovalRequestVBeta1
    {
        return $this->request;
    }

    /**
     * Submitted removal request, null if removal was not requested.
     */
    public function setRequest(?RemovalRequestVBeta1 $request): self
    {
        $this->initialized['request'] = true;
        $this->request = $request;

        return $this;
    }
}
