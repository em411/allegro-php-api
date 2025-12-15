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

class CheckoutFormInvoiceAddressCompany extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Name of a company for which invoice should be issued.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Tax ids of a company for which invoice should be issued.
     *
     * @var list<CheckoutFormInvoiceAddressCompanyId>|null
     */
    protected $ids;
    /**
     * The vat payer status: - `ACTIVE` - user explicitly declared as an active VAT taxpayer, - `NON_ACTIVE` - user explicitly declared as not an active VAT taxpayer, - `NOT_APPLICABLE` - user hasn't declared the VAT taxpayer status, or it's not applicable for given address type or provided company numbers.
     *
     * @var string|null
     */
    protected $vatPayerStatus;
    /**
     * Tax id.
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $taxId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Name of a company for which invoice should be issued.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of a company for which invoice should be issued.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Tax ids of a company for which invoice should be issued.
     *
     * @return list<CheckoutFormInvoiceAddressCompanyId>|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * Tax ids of a company for which invoice should be issued.
     *
     * @param list<CheckoutFormInvoiceAddressCompanyId>|null $ids
     */
    public function setIds(?array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;

        return $this;
    }

    /**
     * The vat payer status: - `ACTIVE` - user explicitly declared as an active VAT taxpayer, - `NON_ACTIVE` - user explicitly declared as not an active VAT taxpayer, - `NOT_APPLICABLE` - user hasn't declared the VAT taxpayer status, or it's not applicable for given address type or provided company numbers.
     */
    public function getVatPayerStatus(): ?string
    {
        return $this->vatPayerStatus;
    }

    /**
     * The vat payer status: - `ACTIVE` - user explicitly declared as an active VAT taxpayer, - `NON_ACTIVE` - user explicitly declared as not an active VAT taxpayer, - `NOT_APPLICABLE` - user hasn't declared the VAT taxpayer status, or it's not applicable for given address type or provided company numbers.
     */
    public function setVatPayerStatus(?string $vatPayerStatus): self
    {
        $this->initialized['vatPayerStatus'] = true;
        $this->vatPayerStatus = $vatPayerStatus;

        return $this;
    }

    /**
     * Tax id.
     *
     * @deprecated
     */
    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    /**
     * Tax id.
     *
     * @deprecated
     */
    public function setTaxId(?string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;

        return $this;
    }
}
