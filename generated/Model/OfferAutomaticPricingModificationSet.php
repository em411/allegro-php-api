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

class OfferAutomaticPricingModificationSet extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of marketplaces to which the rules will be added.
     *
     * @var list<OfferAutomaticPricingModificationSetSetItem>|null
     */
    protected $set;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of marketplaces to which the rules will be added.
     *
     * @return list<OfferAutomaticPricingModificationSetSetItem>|null
     */
    public function getSet(): ?array
    {
        return $this->set;
    }

    /**
     * List of marketplaces to which the rules will be added.
     *
     * @param list<OfferAutomaticPricingModificationSetSetItem>|null $set
     */
    public function setSet(?array $set): self
    {
        $this->initialized['set'] = true;
        $this->set = $set;

        return $this;
    }
}
