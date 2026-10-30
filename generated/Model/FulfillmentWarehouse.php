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

class FulfillmentWarehouse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The warehouse identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The warehouse name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The address of the warehouse.
     *
     * @var FulfillmentWarehouseLocation|null
     */
    protected $location;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The warehouse identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The warehouse identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The warehouse name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The warehouse name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The address of the warehouse.
     */
    public function getLocation(): ?FulfillmentWarehouseLocation
    {
        return $this->location;
    }

    /**
     * The address of the warehouse.
     */
    public function setLocation(?FulfillmentWarehouseLocation $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'location' => ['location', 'getLocation', 'setLocation']];
    }
}
