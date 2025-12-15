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

class PromoOptionsModifications extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Promotion package modifications to be applied.
     *
     * @var list<PromoOptionsModification>|null
     */
    protected $modifications;
    /**
     * Promotion package modifications to be applied on additional marketplaces.
     *
     * @var list<AdditionalMarketplacePromoOptionsModification>|null
     */
    protected $additionalMarketplaces;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Promotion package modifications to be applied.
     *
     * @return list<PromoOptionsModification>|null
     */
    public function getModifications(): ?array
    {
        return $this->modifications;
    }

    /**
     * Promotion package modifications to be applied.
     *
     * @param list<PromoOptionsModification>|null $modifications
     */
    public function setModifications(?array $modifications): self
    {
        $this->initialized['modifications'] = true;
        $this->modifications = $modifications;

        return $this;
    }

    /**
     * Promotion package modifications to be applied on additional marketplaces.
     *
     * @return list<AdditionalMarketplacePromoOptionsModification>|null
     */
    public function getAdditionalMarketplaces(): ?array
    {
        return $this->additionalMarketplaces;
    }

    /**
     * Promotion package modifications to be applied on additional marketplaces.
     *
     * @param list<AdditionalMarketplacePromoOptionsModification>|null $additionalMarketplaces
     */
    public function setAdditionalMarketplaces(?array $additionalMarketplaces): self
    {
        $this->initialized['additionalMarketplaces'] = true;
        $this->additionalMarketplaces = $additionalMarketplaces;

        return $this;
    }
}
