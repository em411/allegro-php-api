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

class AllegroPricesOfferConsentChangeResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Consent status on the base marketplace of the offer.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Consent statuses on marketplaces other than the base marketplace of the offer.
     *
     * @var array<string, AllegroPricesOfferConsentChangeResponseAdditionalMarketplacesItem>|null
     */
    protected $additionalMarketplaces;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Consent status on the base marketplace of the offer.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Consent status on the base marketplace of the offer.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Consent statuses on marketplaces other than the base marketplace of the offer.
     *
     * @return array<string, AllegroPricesOfferConsentChangeResponseAdditionalMarketplacesItem>|null
     */
    public function getAdditionalMarketplaces(): ?iterable
    {
        return $this->additionalMarketplaces;
    }

    /**
     * Consent statuses on marketplaces other than the base marketplace of the offer.
     *
     * @param array<string, AllegroPricesOfferConsentChangeResponseAdditionalMarketplacesItem>|null $additionalMarketplaces
     */
    public function setAdditionalMarketplaces(?iterable $additionalMarketplaces): self
    {
        $this->initialized['additionalMarketplaces'] = true;
        $this->additionalMarketplaces = $additionalMarketplaces;

        return $this;
    }
}
