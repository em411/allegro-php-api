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

class CategoryDefinitionDescriptionResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Hint for the seller for better description for customers.
     *
     * @var string|null
     */
    protected $hint;
    /**
     * Determines whether the description of additional service can be set by the seller, or it's provided by Allegro and cannot be changed.
     *
     * @var bool|null
     */
    protected $editable;
    /**
     * Default description of special additional service, provided by Allegro.
     *
     * @var string|null
     */
    protected $default;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Hint for the seller for better description for customers.
     */
    public function getHint(): ?string
    {
        return $this->hint;
    }

    /**
     * Hint for the seller for better description for customers.
     */
    public function setHint(?string $hint): self
    {
        $this->initialized['hint'] = true;
        $this->hint = $hint;

        return $this;
    }

    /**
     * Determines whether the description of additional service can be set by the seller, or it's provided by Allegro and cannot be changed.
     */
    public function getEditable(): ?bool
    {
        return $this->editable;
    }

    /**
     * Determines whether the description of additional service can be set by the seller, or it's provided by Allegro and cannot be changed.
     */
    public function setEditable(?bool $editable): self
    {
        $this->initialized['editable'] = true;
        $this->editable = $editable;

        return $this;
    }

    /**
     * Default description of special additional service, provided by Allegro.
     */
    public function getDefault(): ?string
    {
        return $this->default;
    }

    /**
     * Default description of special additional service, provided by Allegro.
     */
    public function setDefault(?string $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;

        return $this;
    }
}
