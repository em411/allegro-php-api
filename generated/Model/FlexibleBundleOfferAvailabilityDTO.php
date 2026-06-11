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

class FlexibleBundleOfferAvailabilityDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates if offer is available.
     *
     * @var bool|null
     */
    protected $available;
    /**
     * List of unavailability reasons.
     *
     * @var list<string>|null
     */
    protected $reasons;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates if offer is available.
     */
    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    /**
     * Indicates if offer is available.
     */
    public function setAvailable(?bool $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;

        return $this;
    }

    /**
     * List of unavailability reasons.
     *
     * @return list<string>|null
     */
    public function getReasons(): ?array
    {
        return $this->reasons;
    }

    /**
     * List of unavailability reasons.
     *
     * @param list<string>|null $reasons
     */
    public function setReasons(?array $reasons): self
    {
        $this->initialized['reasons'] = true;
        $this->reasons = $reasons;

        return $this;
    }
}
