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

class PriceAutomation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var PriceAutomationRule|null
     */
    protected $rule;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getRule(): ?PriceAutomationRule
    {
        return $this->rule;
    }

    public function setRule(?PriceAutomationRule $rule): self
    {
        $this->initialized['rule'] = true;
        $this->rule = $rule;

        return $this;
    }
}
