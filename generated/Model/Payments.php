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

class Payments extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Invoice type.
     *
     * @var string|null
     */
    protected $invoice;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Invoice type.
     */
    public function getInvoice(): ?string
    {
        return $this->invoice;
    }

    /**
     * Invoice type.
     */
    public function setInvoice(?string $invoice): self
    {
        $this->initialized['invoice'] = true;
        $this->invoice = $invoice;

        return $this;
    }
}
