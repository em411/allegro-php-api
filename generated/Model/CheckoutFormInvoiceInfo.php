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

class CheckoutFormInvoiceInfo extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Is invoice required by buyer?
     *
     * @var bool|null
     */
    protected $required;
    /**
     * @var CheckoutFormInvoiceAddress|null
     */
    protected $address;
    /**
     * Due date to put on an invoice for Extended Payment Terms purchases. For other payment methods this field will be null.
     *
     * @var string|null
     */
    protected $dueDate;
    /**
     * Invoice features list:
     *  - VAT_EU_VERIFIED - order's data is verified for VAT EU transactions. The presence of this feature means that VAT_EU number will appear in `address.company.ids` field. This feature flag is mutually exclusive with `VAT_EU_UNVERIFIED` feature. Read more: <a href="../../news/serwisy-zagraniczne-allegro-od-18-listopada-2024-pozwolimy-wszystkim-sprzedajacym-udostepnic-oferty-na-business-allegro-cz-oraz-wdrozymy-wsparcie-dla-transakcji-wewnatrzwspolnotowych-1nayOPKLaSr" target="_blank">PL</a> / <a href="../../news/allegro-foreign-marketplaces-starting-november-18-2024-we-will-allow-all-sellers-to-list-offers-on-business-allegro-cz-and-implement-support-for-intra-community-transactions-1nayOPKLaSr" target="_blank">EN</a>.
     *  - VAT_EU_UNVERIFIED - order meets the conditions of VAT EU transaction, but the Buyer's VAT_EU number is not verified. This feature flag is mutually exclusive with `VAT_EU_VERIFIED` feature. Read more: <a href="../../news/serwisy-zagraniczne-allegro-od-18-listopada-2024-pozwolimy-wszystkim-sprzedajacym-udostepnic-oferty-na-business-allegro-cz-oraz-wdrozymy-wsparcie-dla-transakcji-wewnatrzwspolnotowych-1nayOPKLaSr" target="_blank">PL</a> / <a href="../../news/allegro-foreign-marketplaces-starting-november-18-2024-we-will-allow-all-sellers-to-list-offers-on-business-allegro-cz-and-implement-support-for-intra-community-transactions-1nayOPKLaSr" target="_blank">EN</a>.
     *
     * @var list<string>|null
     */
    protected $features;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Is invoice required by buyer?
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }

    /**
     * Is invoice required by buyer?
     */
    public function setRequired(?bool $required): self
    {
        $this->initialized['required'] = true;
        $this->required = $required;

        return $this;
    }

    public function getAddress(): ?CheckoutFormInvoiceAddress
    {
        return $this->address;
    }

    public function setAddress(?CheckoutFormInvoiceAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * Due date to put on an invoice for Extended Payment Terms purchases. For other payment methods this field will be null.
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    /**
     * Due date to put on an invoice for Extended Payment Terms purchases. For other payment methods this field will be null.
     */
    public function setDueDate(?string $dueDate): self
    {
        $this->initialized['dueDate'] = true;
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Invoice features list:
     *  - VAT_EU_VERIFIED - order's data is verified for VAT EU transactions. The presence of this feature means that VAT_EU number will appear in `address.company.ids` field. This feature flag is mutually exclusive with `VAT_EU_UNVERIFIED` feature. Read more: <a href="../../news/serwisy-zagraniczne-allegro-od-18-listopada-2024-pozwolimy-wszystkim-sprzedajacym-udostepnic-oferty-na-business-allegro-cz-oraz-wdrozymy-wsparcie-dla-transakcji-wewnatrzwspolnotowych-1nayOPKLaSr" target="_blank">PL</a> / <a href="../../news/allegro-foreign-marketplaces-starting-november-18-2024-we-will-allow-all-sellers-to-list-offers-on-business-allegro-cz-and-implement-support-for-intra-community-transactions-1nayOPKLaSr" target="_blank">EN</a>.
     *  - VAT_EU_UNVERIFIED - order meets the conditions of VAT EU transaction, but the Buyer's VAT_EU number is not verified. This feature flag is mutually exclusive with `VAT_EU_VERIFIED` feature. Read more: <a href="../../news/serwisy-zagraniczne-allegro-od-18-listopada-2024-pozwolimy-wszystkim-sprzedajacym-udostepnic-oferty-na-business-allegro-cz-oraz-wdrozymy-wsparcie-dla-transakcji-wewnatrzwspolnotowych-1nayOPKLaSr" target="_blank">PL</a> / <a href="../../news/allegro-foreign-marketplaces-starting-november-18-2024-we-will-allow-all-sellers-to-list-offers-on-business-allegro-cz-and-implement-support-for-intra-community-transactions-1nayOPKLaSr" target="_blank">EN</a>.
     *
     * @return list<string>|null
     */
    public function getFeatures(): ?array
    {
        return $this->features;
    }

    /**
     * Invoice features list:
     * - VAT_EU_VERIFIED - order's data is verified for VAT EU transactions. The presence of this feature means that VAT_EU number will appear in `address.company.ids` field. This feature flag is mutually exclusive with `VAT_EU_UNVERIFIED` feature. Read more: <a href="../../news/serwisy-zagraniczne-allegro-od-18-listopada-2024-pozwolimy-wszystkim-sprzedajacym-udostepnic-oferty-na-business-allegro-cz-oraz-wdrozymy-wsparcie-dla-transakcji-wewnatrzwspolnotowych-1nayOPKLaSr" target="_blank">PL</a> / <a href="../../news/allegro-foreign-marketplaces-starting-november-18-2024-we-will-allow-all-sellers-to-list-offers-on-business-allegro-cz-and-implement-support-for-intra-community-transactions-1nayOPKLaSr" target="_blank">EN</a>.
     * - VAT_EU_UNVERIFIED - order meets the conditions of VAT EU transaction, but the Buyer's VAT_EU number is not verified. This feature flag is mutually exclusive with `VAT_EU_VERIFIED` feature. Read more: <a href="../../news/serwisy-zagraniczne-allegro-od-18-listopada-2024-pozwolimy-wszystkim-sprzedajacym-udostepnic-oferty-na-business-allegro-cz-oraz-wdrozymy-wsparcie-dla-transakcji-wewnatrzwspolnotowych-1nayOPKLaSr" target="_blank">PL</a> / <a href="../../news/allegro-foreign-marketplaces-starting-november-18-2024-we-will-allow-all-sellers-to-list-offers-on-business-allegro-cz-and-implement-support-for-intra-community-transactions-1nayOPKLaSr" target="_blank">EN</a>.
     *
     * @param list<string>|null $features
     */
    public function setFeatures(?array $features): self
    {
        $this->initialized['features'] = true;
        $this->features = $features;

        return $this;
    }
}
