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

class BadgeApplicationPrices extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     *
     * @var BadgeApplicationBargainPrice|null
     */
    protected $bargain;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     */
    public function getBargain(): ?BadgeApplicationBargainPrice
    {
        return $this->bargain;
    }

    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     */
    public function setBargain(?BadgeApplicationBargainPrice $bargain): self
    {
        $this->initialized['bargain'] = true;
        $this->bargain = $bargain;

        return $this;
    }
}
