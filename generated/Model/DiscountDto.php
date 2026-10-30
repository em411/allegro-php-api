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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class DiscountDto implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Whether this offer has an opportunity to be discounted by Allegro.
     *
     * @var bool|null
     */
    protected $opportunity;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Whether this offer has an opportunity to be discounted by Allegro.
     */
    public function getOpportunity(): ?bool
    {
        return $this->opportunity;
    }

    /**
     * Whether this offer has an opportunity to be discounted by Allegro.
     */
    public function setOpportunity(?bool $opportunity): self
    {
        $this->initialized['opportunity'] = true;
        $this->opportunity = $opportunity;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['opportunity' => ['opportunity', 'getOpportunity', 'setOpportunity']];
    }
}
