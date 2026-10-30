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

/**
 * @deprecated
 */
class DeliveryServicesDto implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<DeliveryServiceDto>|null
     */
    protected $services;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<DeliveryServiceDto>|null
     */
    public function getServices(): ?array
    {
        return $this->services;
    }

    /**
     * @param list<DeliveryServiceDto>|null $services
     */
    public function setServices(?array $services): self
    {
        $this->initialized['services'] = true;
        $this->services = $services;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['services' => ['services', 'getServices', 'setServices']];
    }
}
