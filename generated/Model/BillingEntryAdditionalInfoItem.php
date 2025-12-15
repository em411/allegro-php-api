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

class BillingEntryAdditionalInfoItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The technical key identifying the type of additional information.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The display name for the additional information type. This value is translated based on the "Accept-Language" header. By default a message in English is returned.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The actual value associated with the given additional information type.
     *
     * @var string|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The technical key identifying the type of additional information.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The technical key identifying the type of additional information.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The display name for the additional information type. This value is translated based on the "Accept-Language" header. By default a message in English is returned.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The display name for the additional information type. This value is translated based on the "Accept-Language" header. By default a message in English is returned.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The actual value associated with the given additional information type.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * The actual value associated with the given additional information type.
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
