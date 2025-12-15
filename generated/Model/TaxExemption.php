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

class TaxExemption extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Displayable exemption label.
     *
     * @var string|null
     */
    protected $label;
    /**
     * Value of exemption.
     *
     * @var string|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Displayable exemption label.
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Displayable exemption label.
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    /**
     * Value of exemption.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Value of exemption.
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
