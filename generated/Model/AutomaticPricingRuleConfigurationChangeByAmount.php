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

class AutomaticPricingRuleConfigurationChangeByAmount extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var AutomaticPricingRuleConfigurationChangeByAmountChangeByAmount|null
     */
    protected $changeByAmount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getChangeByAmount(): ?AutomaticPricingRuleConfigurationChangeByAmountChangeByAmount
    {
        return $this->changeByAmount;
    }

    public function setChangeByAmount(?AutomaticPricingRuleConfigurationChangeByAmountChangeByAmount $changeByAmount): self
    {
        $this->initialized['changeByAmount'] = true;
        $this->changeByAmount = $changeByAmount;

        return $this;
    }
}
