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

class BadgePatchPricesPricesBargain extends \ArrayObject
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
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     */
    public function getValue(): ?BadgeApplicationBargainPrice
    {
        return $this->value;
    }

    /**
     * Bargain price. Required by DISCOUNT and SOURCING campaign.
     */
    public function setValue(?BadgeApplicationBargainPrice $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
