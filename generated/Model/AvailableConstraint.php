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

class AvailableConstraint implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * One of the types COUNTRY_SAME_QUANTITY, COUNTRY_DELIVERY_SAME_QUANTITY or COUNTRY_DELIVERY_CATEGORY_SAME_QUANTITY.
     *
     * @var string|null
     */
    protected $type;
    /**
     * All delivery methods ids, which are available for given additional service.
     *
     * @var list<string>|null
     */
    protected $availableDeliveryMethods;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * One of the types COUNTRY_SAME_QUANTITY, COUNTRY_DELIVERY_SAME_QUANTITY or COUNTRY_DELIVERY_CATEGORY_SAME_QUANTITY.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * One of the types COUNTRY_SAME_QUANTITY, COUNTRY_DELIVERY_SAME_QUANTITY or COUNTRY_DELIVERY_CATEGORY_SAME_QUANTITY.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * All delivery methods ids, which are available for given additional service.
     *
     * @return list<string>|null
     */
    public function getAvailableDeliveryMethods(): ?array
    {
        return $this->availableDeliveryMethods;
    }

    /**
     * All delivery methods ids, which are available for given additional service.
     *
     * @param list<string>|null $availableDeliveryMethods
     */
    public function setAvailableDeliveryMethods(?array $availableDeliveryMethods): self
    {
        $this->initialized['availableDeliveryMethods'] = true;
        $this->availableDeliveryMethods = $availableDeliveryMethods;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'availableDeliveryMethods' => ['availableDeliveryMethods', 'getAvailableDeliveryMethods', 'setAvailableDeliveryMethods']];
    }
}
