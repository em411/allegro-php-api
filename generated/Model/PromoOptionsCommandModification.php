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

class PromoOptionsCommandModification extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The base package. Available packages can be determined using <a href="#operation/getAvailableOfferPromotionPackages">GET /sale/offer-promotion-packages</a>.
     *
     * @var PromoOptionsCommandModificationBasePackage|null
     */
    protected $basePackage;
    /**
     * Extra packages to be set on offer. Omitting this parameter will preserve the packages already present.
     *
     * @var list<PromoOptionsCommandModificationPackage>|null
     */
    protected $extraPackages;
    /**
     * Time at which the modification will be applied.
     *
     * @var string|null
     */
    protected $modificationTime;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The base package. Available packages can be determined using <a href="#operation/getAvailableOfferPromotionPackages">GET /sale/offer-promotion-packages</a>.
     */
    public function getBasePackage(): ?PromoOptionsCommandModificationBasePackage
    {
        return $this->basePackage;
    }

    /**
     * The base package. Available packages can be determined using <a href="#operation/getAvailableOfferPromotionPackages">GET /sale/offer-promotion-packages</a>.
     */
    public function setBasePackage(?PromoOptionsCommandModificationBasePackage $basePackage): self
    {
        $this->initialized['basePackage'] = true;
        $this->basePackage = $basePackage;

        return $this;
    }

    /**
     * Extra packages to be set on offer. Omitting this parameter will preserve the packages already present.
     *
     * @return list<PromoOptionsCommandModificationPackage>|null
     */
    public function getExtraPackages(): ?array
    {
        return $this->extraPackages;
    }

    /**
     * Extra packages to be set on offer. Omitting this parameter will preserve the packages already present.
     *
     * @param list<PromoOptionsCommandModificationPackage>|null $extraPackages
     */
    public function setExtraPackages(?array $extraPackages): self
    {
        $this->initialized['extraPackages'] = true;
        $this->extraPackages = $extraPackages;

        return $this;
    }

    /**
     * Time at which the modification will be applied.
     */
    public function getModificationTime(): ?string
    {
        return $this->modificationTime;
    }

    /**
     * Time at which the modification will be applied.
     */
    public function setModificationTime(?string $modificationTime): self
    {
        $this->initialized['modificationTime'] = true;
        $this->modificationTime = $modificationTime;

        return $this;
    }
}
