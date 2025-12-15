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

class ModificationPayments extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Invoice type: VAT, VAT_MARGIN, WITHOUT_VAT, NO_INVOICE.
     *
     * @var string|null
     */
    protected $invoice;
    /**
     * VAT tax rate.
     *
     * @var Tax|null
     */
    protected $tax;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Invoice type: VAT, VAT_MARGIN, WITHOUT_VAT, NO_INVOICE.
     */
    public function getInvoice(): ?string
    {
        return $this->invoice;
    }

    /**
     * Invoice type: VAT, VAT_MARGIN, WITHOUT_VAT, NO_INVOICE.
     */
    public function setInvoice(?string $invoice): self
    {
        $this->initialized['invoice'] = true;
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * VAT tax rate.
     */
    public function getTax(): ?Tax
    {
        return $this->tax;
    }

    /**
     * VAT tax rate.
     */
    public function setTax(?Tax $tax): self
    {
        $this->initialized['tax'] = true;
        $this->tax = $tax;

        return $this;
    }
}
