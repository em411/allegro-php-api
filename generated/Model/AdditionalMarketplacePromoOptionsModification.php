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

class AdditionalMarketplacePromoOptionsModification extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $marketplaceId;
    /**
     * Promotion package modifications to be applied on additional marketplace.
     *
     * @var list<PromoOptionsModification>|null
     */
    protected $modifications;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    public function setMarketplaceId(?string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;

        return $this;
    }

    /**
     * Promotion package modifications to be applied on additional marketplace.
     *
     * @return list<PromoOptionsModification>|null
     */
    public function getModifications(): ?array
    {
        return $this->modifications;
    }

    /**
     * Promotion package modifications to be applied on additional marketplace.
     *
     * @param list<PromoOptionsModification>|null $modifications
     */
    public function setModifications(?array $modifications): self
    {
        $this->initialized['modifications'] = true;
        $this->modifications = $modifications;

        return $this;
    }
}
