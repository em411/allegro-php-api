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

class CheckoutFormInvoiceAddressCompanyId extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The tax id type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The tax id value.
     *
     * @var string|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The tax id type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The tax id type.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The tax id value.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * The tax id value.
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
