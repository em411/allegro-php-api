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

class BadgeApplicationPurchaseConstraints implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Limits of purchase of this offer while it participates in the campaign. Only DISCOUNT and SOURCING campaigns.
     *
     * @var BadgeApplicationPurchaseConstraintsLimit|null
     */
    protected $limit;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Limits of purchase of this offer while it participates in the campaign. Only DISCOUNT and SOURCING campaigns.
     */
    public function getLimit(): ?BadgeApplicationPurchaseConstraintsLimit
    {
        return $this->limit;
    }

    /**
     * Limits of purchase of this offer while it participates in the campaign. Only DISCOUNT and SOURCING campaigns.
     */
    public function setLimit(?BadgeApplicationPurchaseConstraintsLimit $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['limit' => ['limit', 'getLimit', 'setLimit']];
    }
}
