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

class PromoOptionsCommand extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer choice criteria.
     *
     * @var list<OfferCriterium>|null
     */
    protected $offerCriteria;
    /**
     * @var PromoOptionsCommandModification|null
     */
    protected $modification;
    /**
     * @var list<AdditionalMarketplacePromoOptionsCommandModification>|null
     */
    protected $additionalMarketplaces;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer choice criteria.
     *
     * @return list<OfferCriterium>|null
     */
    public function getOfferCriteria(): ?array
    {
        return $this->offerCriteria;
    }

    /**
     * Offer choice criteria.
     *
     * @param list<OfferCriterium>|null $offerCriteria
     */
    public function setOfferCriteria(?array $offerCriteria): self
    {
        $this->initialized['offerCriteria'] = true;
        $this->offerCriteria = $offerCriteria;

        return $this;
    }

    public function getModification(): ?PromoOptionsCommandModification
    {
        return $this->modification;
    }

    public function setModification(?PromoOptionsCommandModification $modification): self
    {
        $this->initialized['modification'] = true;
        $this->modification = $modification;

        return $this;
    }

    /**
     * @return list<AdditionalMarketplacePromoOptionsCommandModification>|null
     */
    public function getAdditionalMarketplaces(): ?array
    {
        return $this->additionalMarketplaces;
    }

    /**
     * @param list<AdditionalMarketplacePromoOptionsCommandModification>|null $additionalMarketplaces
     */
    public function setAdditionalMarketplaces(?array $additionalMarketplaces): self
    {
        $this->initialized['additionalMarketplaces'] = true;
        $this->additionalMarketplaces = $additionalMarketplaces;

        return $this;
    }
}
