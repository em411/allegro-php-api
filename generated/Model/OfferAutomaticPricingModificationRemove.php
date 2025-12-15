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

class OfferAutomaticPricingModificationRemove extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of marketplaces from which rules will be removed.
     *
     * @var list<OfferAutomaticPricingModificationRemoveRemoveItem>|null
     */
    protected $remove;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of marketplaces from which rules will be removed.
     *
     * @return list<OfferAutomaticPricingModificationRemoveRemoveItem>|null
     */
    public function getRemove(): ?array
    {
        return $this->remove;
    }

    /**
     * List of marketplaces from which rules will be removed.
     *
     * @param list<OfferAutomaticPricingModificationRemoveRemoveItem>|null $remove
     */
    public function setRemove(?array $remove): self
    {
        $this->initialized['remove'] = true;
        $this->remove = $remove;

        return $this;
    }
}
