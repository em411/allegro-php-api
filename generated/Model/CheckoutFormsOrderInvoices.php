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

class CheckoutFormsOrderInvoices extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<CheckoutFormsOrderInvoice>|null
     */
    protected $invoices;
    /**
     * @var list<CheckoutFormsOrderLink>|null
     */
    protected $links;
    /**
     * Informs whether an invoice or a proof-of-purchase has been sent outside of Allegro platform.
     *
     * @var bool|null
     */
    protected $hasExternalInvoices;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<CheckoutFormsOrderInvoice>|null
     */
    public function getInvoices(): ?array
    {
        return $this->invoices;
    }

    /**
     * @param list<CheckoutFormsOrderInvoice>|null $invoices
     */
    public function setInvoices(?array $invoices): self
    {
        $this->initialized['invoices'] = true;
        $this->invoices = $invoices;

        return $this;
    }

    /**
     * @return list<CheckoutFormsOrderLink>|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * @param list<CheckoutFormsOrderLink>|null $links
     */
    public function setLinks(?array $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    /**
     * Informs whether an invoice or a proof-of-purchase has been sent outside of Allegro platform.
     */
    public function getHasExternalInvoices(): ?bool
    {
        return $this->hasExternalInvoices;
    }

    /**
     * Informs whether an invoice or a proof-of-purchase has been sent outside of Allegro platform.
     */
    public function setHasExternalInvoices(?bool $hasExternalInvoices): self
    {
        $this->initialized['hasExternalInvoices'] = true;
        $this->hasExternalInvoices = $hasExternalInvoices;

        return $this;
    }
}
