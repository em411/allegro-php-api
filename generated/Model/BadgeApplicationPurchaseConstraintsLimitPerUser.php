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

class BadgeApplicationPurchaseConstraintsLimitPerUser extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Maximum number of items that one user can buy of this offer, while it participates in the campaign.
     *
     * @var int|null
     */
    protected $maxItems;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Maximum number of items that one user can buy of this offer, while it participates in the campaign.
     */
    public function getMaxItems(): ?int
    {
        return $this->maxItems;
    }

    /**
     * Maximum number of items that one user can buy of this offer, while it participates in the campaign.
     */
    public function setMaxItems(?int $maxItems): self
    {
        $this->initialized['maxItems'] = true;
        $this->maxItems = $maxItems;

        return $this;
    }
}
