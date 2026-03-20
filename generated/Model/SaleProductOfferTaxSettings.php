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

class SaleProductOfferTaxSettings extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Tax rates for offer.
     *
     * @var list<OfferTaxRate>|null
     */
    protected $rates;
    /**
     * The subject of taxation for offer.
     *
     * @var string|null
     */
    protected $subject;
    /**
     * The exemption of taxation for offer.
     *
     * @var string|null
     */
    protected $exemption;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Tax rates for offer.
     *
     * @return list<OfferTaxRate>|null
     */
    public function getRates(): ?array
    {
        return $this->rates;
    }

    /**
     * Tax rates for offer.
     *
     * @param list<OfferTaxRate>|null $rates
     */
    public function setRates(?array $rates): self
    {
        $this->initialized['rates'] = true;
        $this->rates = $rates;

        return $this;
    }

    /**
     * The subject of taxation for offer.
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * The subject of taxation for offer.
     */
    public function setSubject(?string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    /**
     * The exemption of taxation for offer.
     */
    public function getExemption(): ?string
    {
        return $this->exemption;
    }

    /**
     * The exemption of taxation for offer.
     */
    public function setExemption(?string $exemption): self
    {
        $this->initialized['exemption'] = true;
        $this->exemption = $exemption;

        return $this;
    }
}
