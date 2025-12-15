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

class SellerRebateOfferCriterion extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Set of offers – only if `type` is `CONTAINS_OFFERS`.
     *
     * @var list<SellerRebateOfferCriterionOffersItem>|null
     */
    protected $offers;
    /**
     * Criteria type: CONTAINS_OFFERS or OFFERS_ASSIGNED_EXTERNALLY.
     *
     * @var string|null
     */
    protected $type;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Set of offers – only if `type` is `CONTAINS_OFFERS`.
     *
     * @return list<SellerRebateOfferCriterionOffersItem>|null
     */
    public function getOffers(): ?array
    {
        return $this->offers;
    }

    /**
     * Set of offers – only if `type` is `CONTAINS_OFFERS`.
     *
     * @param list<SellerRebateOfferCriterionOffersItem>|null $offers
     */
    public function setOffers(?array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;

        return $this;
    }

    /**
     * Criteria type: CONTAINS_OFFERS or OFFERS_ASSIGNED_EXTERNALLY.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Criteria type: CONTAINS_OFFERS or OFFERS_ASSIGNED_EXTERNALLY.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
