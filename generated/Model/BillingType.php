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

class BillingType extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ID of the billing type.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Localized type name.
     *
     * @var string|null
     */
    protected $description;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ID of the billing type.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * ID of the billing type.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Localized type name.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Localized type name.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
