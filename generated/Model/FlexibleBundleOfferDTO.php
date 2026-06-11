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

class FlexibleBundleOfferDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Indicates if offer is excluded from discount calculation.
     *
     * @var bool|null
     */
    protected $excludedFromDiscount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Offer identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Indicates if offer is excluded from discount calculation.
     */
    public function getExcludedFromDiscount(): ?bool
    {
        return $this->excludedFromDiscount;
    }

    /**
     * Indicates if offer is excluded from discount calculation.
     */
    public function setExcludedFromDiscount(?bool $excludedFromDiscount): self
    {
        $this->initialized['excludedFromDiscount'] = true;
        $this->excludedFromDiscount = $excludedFromDiscount;

        return $this;
    }
}
