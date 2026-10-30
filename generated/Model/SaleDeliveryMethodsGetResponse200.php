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

class SaleDeliveryMethodsGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<SaleDeliveryMethodsGetResponse200DeliveryMethodsItem>|null
     */
    protected $deliveryMethods;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<SaleDeliveryMethodsGetResponse200DeliveryMethodsItem>|null
     */
    public function getDeliveryMethods(): ?array
    {
        return $this->deliveryMethods;
    }

    /**
     * @param list<SaleDeliveryMethodsGetResponse200DeliveryMethodsItem>|null $deliveryMethods
     */
    public function setDeliveryMethods(?array $deliveryMethods): self
    {
        $this->initialized['deliveryMethods'] = true;
        $this->deliveryMethods = $deliveryMethods;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['deliveryMethods' => ['deliveryMethods', 'getDeliveryMethods', 'setDeliveryMethods']];
    }
}
