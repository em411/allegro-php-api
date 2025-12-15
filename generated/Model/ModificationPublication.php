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

class ModificationPublication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer duration time provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @var string|null
     */
    protected $duration;
    /**
     * Unlimited duration time.
     *
     * @var bool|null
     */
    protected $durationUnlimited;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer duration time provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * Offer duration time provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     */
    public function setDuration(?string $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;

        return $this;
    }

    /**
     * Unlimited duration time.
     */
    public function getDurationUnlimited(): ?bool
    {
        return $this->durationUnlimited;
    }

    /**
     * Unlimited duration time.
     */
    public function setDurationUnlimited(?bool $durationUnlimited): self
    {
        $this->initialized['durationUnlimited'] = true;
        $this->durationUnlimited = $durationUnlimited;

        return $this;
    }
}
