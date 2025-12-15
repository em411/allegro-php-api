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

class ReturnPolicyAvailability extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates if return policy is full, restricted or disabled.
     *
     * @var string|null
     */
    protected $range;
    /**
     * @var RestrictionCause|null
     */
    protected $restrictionCause;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates if return policy is full, restricted or disabled.
     */
    public function getRange(): ?string
    {
        return $this->range;
    }

    /**
     * Indicates if return policy is full, restricted or disabled.
     */
    public function setRange(?string $range): self
    {
        $this->initialized['range'] = true;
        $this->range = $range;

        return $this;
    }

    public function getRestrictionCause(): ?RestrictionCause
    {
        return $this->restrictionCause;
    }

    public function setRestrictionCause(?RestrictionCause $restrictionCause): self
    {
        $this->initialized['restrictionCause'] = true;
        $this->restrictionCause = $restrictionCause;

        return $this;
    }
}
