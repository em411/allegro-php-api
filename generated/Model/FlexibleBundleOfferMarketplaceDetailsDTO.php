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

class FlexibleBundleOfferMarketplaceDetailsDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Marketplace identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * @var FlexibleBundleOfferMarketplaceDetailsDTOAvailability|null
     */
    protected $availability;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Marketplace identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Marketplace identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getAvailability(): ?FlexibleBundleOfferMarketplaceDetailsDTOAvailability
    {
        return $this->availability;
    }

    public function setAvailability(?FlexibleBundleOfferMarketplaceDetailsDTOAvailability $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;

        return $this;
    }
}
