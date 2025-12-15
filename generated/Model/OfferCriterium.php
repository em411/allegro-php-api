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

class OfferCriterium extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Set of offers. You can add up to 1000 offers.
     *
     * @var list<OfferId>|null
     */
    protected $offers;
    /**
     * Criteria type: CONTAINS_OFFERS.
     *
     * @var string|null
     */
    protected $type;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Set of offers. You can add up to 1000 offers.
     *
     * @return list<OfferId>|null
     */
    public function getOffers(): ?array
    {
        return $this->offers;
    }

    /**
     * Set of offers. You can add up to 1000 offers.
     *
     * @param list<OfferId>|null $offers
     */
    public function setOffers(?array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;

        return $this;
    }

    /**
     * Criteria type: CONTAINS_OFFERS.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Criteria type: CONTAINS_OFFERS.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
