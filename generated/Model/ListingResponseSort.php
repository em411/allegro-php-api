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

class ListingResponseSort extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The query parameter value which should be used for this sorting option.
     *
     * @var string|null
     */
    protected $value;
    /**
     * The sorting option name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The order label specifying ascending or descending mode.
     *
     * @var string|null
     */
    protected $order;
    /**
     * Indicates whether this sorting option was used in the current request.
     *
     * @var bool|null
     */
    protected $selected;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The query parameter value which should be used for this sorting option.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * The query parameter value which should be used for this sorting option.
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * The sorting option name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The sorting option name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The order label specifying ascending or descending mode.
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * The order label specifying ascending or descending mode.
     */
    public function setOrder(?string $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    /**
     * Indicates whether this sorting option was used in the current request.
     */
    public function getSelected(): ?bool
    {
        return $this->selected;
    }

    /**
     * Indicates whether this sorting option was used in the current request.
     */
    public function setSelected(?bool $selected): self
    {
        $this->initialized['selected'] = true;
        $this->selected = $selected;

        return $this;
    }
}
