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

class ShippingBlockade extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ISO 3166-1 alpha-2 country code.
     *
     * @var string|null
     */
    protected $country;
    /**
     * Reason of export blockade.
     *
     * @var string|null
     */
    protected $reason;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ISO 3166-1 alpha-2 country code.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * ISO 3166-1 alpha-2 country code.
     */
    public function setCountry(?string $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;

        return $this;
    }

    /**
     * Reason of export blockade.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Reason of export blockade.
     */
    public function setReason(?string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }
}
