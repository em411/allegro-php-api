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

class ModificationDiscountsWholesalePriceList extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Promotion id of a wholesale price list to assign to the offer or `null` to unassign wholesale price list from the offer.
     *
     * @var string|null
     */
    protected $id;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Promotion id of a wholesale price list to assign to the offer or `null` to unassign wholesale price list from the offer.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Promotion id of a wholesale price list to assign to the offer or `null` to unassign wholesale price list from the offer.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }
}
