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

class MarketplacePriceModification implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Type of the modification.
     *
     * @var string|null
     */
    protected $changeType;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Type of the modification.
     */
    public function getChangeType(): ?string
    {
        return $this->changeType;
    }

    /**
     * Type of the modification.
     */
    public function setChangeType(?string $changeType)
    {
        $this->initialized['changeType'] = true;
        $this->changeType = $changeType;
    }

    public function definedProperties(): array
    {
        return ['changeType' => ['changeType', 'getChangeType', 'setChangeType']];
    }
}
