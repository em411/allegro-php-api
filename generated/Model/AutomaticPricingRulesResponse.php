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

class AutomaticPricingRulesResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of rules.
     *
     * @var list<AutomaticPricingRuleResponse>|null
     */
    protected $rules;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of rules.
     *
     * @return list<AutomaticPricingRuleResponse>|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }

    /**
     * List of rules.
     *
     * @param list<AutomaticPricingRuleResponse>|null $rules
     */
    public function setRules(?array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;

        return $this;
    }
}
