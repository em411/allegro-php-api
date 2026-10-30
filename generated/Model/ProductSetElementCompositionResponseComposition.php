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

class ProductSetElementCompositionResponseComposition extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates whether the composition was provided manually (`MANUAL`) or generated automatically (`AUTO`).
     *
     * @var string|null
     */
    protected $mode;
    /**
     * Array of components the product composition consists of.
     *
     * @var list<Component>|null
     */
    protected $components;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates whether the composition was provided manually (`MANUAL`) or generated automatically (`AUTO`).
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Indicates whether the composition was provided manually (`MANUAL`) or generated automatically (`AUTO`).
     */
    public function setMode(?string $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;

        return $this;
    }

    /**
     * Array of components the product composition consists of.
     *
     * @return list<Component>|null
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    /**
     * Array of components the product composition consists of.
     *
     * @param list<Component>|null $components
     */
    public function setComponents(?array $components): self
    {
        $this->initialized['components'] = true;
        $this->components = $components;

        return $this;
    }
}
