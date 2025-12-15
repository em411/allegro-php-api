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

class AutomaticPricingRuleConfigurationChangeByAmountChangeByAmount extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $operation;
    /**
     * @var list<AutomaticPricingRuleConfigurationChangeByAmountChangeByAmountValuesItem>|null
     */
    protected $values;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getOperation(): ?string
    {
        return $this->operation;
    }

    public function setOperation(?string $operation): self
    {
        $this->initialized['operation'] = true;
        $this->operation = $operation;

        return $this;
    }

    /**
     * @return list<AutomaticPricingRuleConfigurationChangeByAmountChangeByAmountValuesItem>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * @param list<AutomaticPricingRuleConfigurationChangeByAmountChangeByAmountValuesItem>|null $values
     */
    public function setValues(?array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;

        return $this;
    }
}
