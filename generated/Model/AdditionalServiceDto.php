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

class AdditionalServiceDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ID of additional service.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Translated name of service: 'Non-standard parcel' | 'Niestandardowa przesyłka'.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Optional description of service.
     *
     * @var string|null
     */
    protected $description;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ID of additional service.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * ID of additional service.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Translated name of service: 'Non-standard parcel' | 'Niestandardowa przesyłka'.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Translated name of service: 'Non-standard parcel' | 'Niestandardowa przesyłka'.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Optional description of service.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Optional description of service.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
