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

class ParcelAdditionalServicesOptionAvailability extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Name of option that can be passed to additionalServices for parcel creation.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Brief description of option.
     *
     * @var string|null
     */
    protected $description;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Name of option that can be passed to additionalServices for parcel creation.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of option that can be passed to additionalServices for parcel creation.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Brief description of option.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Brief description of option.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
