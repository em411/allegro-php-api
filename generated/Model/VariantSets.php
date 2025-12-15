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

class VariantSets extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Total number of variant sets matching the query.
     *
     * @var int|null
     */
    protected $count;
    /**
     * @var list<VariantSetsVariantSet>|null
     */
    protected $offerVariants;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Total number of variant sets matching the query.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Total number of variant sets matching the query.
     */
    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * @return list<VariantSetsVariantSet>|null
     */
    public function getOfferVariants(): ?array
    {
        return $this->offerVariants;
    }

    /**
     * @param list<VariantSetsVariantSet>|null $offerVariants
     */
    public function setOfferVariants(?array $offerVariants): self
    {
        $this->initialized['offerVariants'] = true;
        $this->offerVariants = $offerVariants;

        return $this;
    }
}
