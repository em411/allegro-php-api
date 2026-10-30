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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class OfferListingDtoV1AdditionalMarketplaceStock implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The number of sold items in the last 30 days on the given marketplace.
     *
     * @var int|null
     */
    protected $sold;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The number of sold items in the last 30 days on the given marketplace.
     */
    public function getSold(): ?int
    {
        return $this->sold;
    }

    /**
     * The number of sold items in the last 30 days on the given marketplace.
     */
    public function setSold(?int $sold): self
    {
        $this->initialized['sold'] = true;
        $this->sold = $sold;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['sold' => ['sold', 'getSold', 'setSold']];
    }
}
