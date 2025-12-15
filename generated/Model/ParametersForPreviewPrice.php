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

class ParametersForPreviewPrice extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var Category|null
     */
    protected $category;
    /**
     * Offer condition, if is new, used or other.
     *
     * @var string|null
     */
    protected $condition;
    /**
     * @var string|null
     */
    protected $duration;
    /**
     * @var bool|null
     */
    protected $hasAnyQuantity;
    /**
     * If set, minimum value 0.
     *
     * @var int|null
     */
    protected $numberOfBigPhotos;
    /**
     * If set, minimum value 0.
     *
     * @var int|null
     */
    protected $numberOfPhotos;
    /**
     * Quantity of items to be sold. If set, minimum value 1.
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * Deprecated. Value 'true' sets the 'offer.type' field to 'shop', value 'false' to 'offer'. This field is ignored if 'offer.type' field is set.
     *
     * @var bool|null
     */
    protected $shop;
    /**
     * Quantity of sold items. Relates to commission success fee. If set, minimum value 1.
     *
     * @var int|null
     */
    protected $soldQuantity;
    /**
     * Offer type. 'type' or 'shop' fields must be provided. Takes precedence over 'shop' field. **Note:** if type = 'advertisement' then either 'quantity' or 'soldQuantity' field must be set.
     *
     * @var string|null
     */
    protected $type;
    /**
     * @var float|null
     */
    protected $unitPrice;
    /**
     * @var bool|null
     */
    protected $bold;
    /**
     * @var bool|null
     */
    protected $highlight;
    /**
     * @var bool|null
     */
    protected $departmentPage;
    /**
     * @var bool|null
     */
    protected $emphasized;
    /**
     * @var bool|null
     */
    protected $emphasizedHighlightBoldPackage;
    /**
     * @var bool|null
     */
    protected $multiVariant;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

        return $this;
    }

    /**
     * Offer condition, if is new, used or other.
     */
    public function getCondition(): ?string
    {
        return $this->condition;
    }

    /**
     * Offer condition, if is new, used or other.
     */
    public function setCondition(?string $condition): self
    {
        $this->initialized['condition'] = true;
        $this->condition = $condition;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;

        return $this;
    }

    public function getHasAnyQuantity(): ?bool
    {
        return $this->hasAnyQuantity;
    }

    public function setHasAnyQuantity(?bool $hasAnyQuantity): self
    {
        $this->initialized['hasAnyQuantity'] = true;
        $this->hasAnyQuantity = $hasAnyQuantity;

        return $this;
    }

    /**
     * If set, minimum value 0.
     */
    public function getNumberOfBigPhotos(): ?int
    {
        return $this->numberOfBigPhotos;
    }

    /**
     * If set, minimum value 0.
     */
    public function setNumberOfBigPhotos(?int $numberOfBigPhotos): self
    {
        $this->initialized['numberOfBigPhotos'] = true;
        $this->numberOfBigPhotos = $numberOfBigPhotos;

        return $this;
    }

    /**
     * If set, minimum value 0.
     */
    public function getNumberOfPhotos(): ?int
    {
        return $this->numberOfPhotos;
    }

    /**
     * If set, minimum value 0.
     */
    public function setNumberOfPhotos(?int $numberOfPhotos): self
    {
        $this->initialized['numberOfPhotos'] = true;
        $this->numberOfPhotos = $numberOfPhotos;

        return $this;
    }

    /**
     * Quantity of items to be sold. If set, minimum value 1.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Quantity of items to be sold. If set, minimum value 1.
     */
    public function setQuantity(?int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Deprecated. Value 'true' sets the 'offer.type' field to 'shop', value 'false' to 'offer'. This field is ignored if 'offer.type' field is set.
     */
    public function getShop(): ?bool
    {
        return $this->shop;
    }

    /**
     * Deprecated. Value 'true' sets the 'offer.type' field to 'shop', value 'false' to 'offer'. This field is ignored if 'offer.type' field is set.
     */
    public function setShop(?bool $shop): self
    {
        $this->initialized['shop'] = true;
        $this->shop = $shop;

        return $this;
    }

    /**
     * Quantity of sold items. Relates to commission success fee. If set, minimum value 1.
     */
    public function getSoldQuantity(): ?int
    {
        return $this->soldQuantity;
    }

    /**
     * Quantity of sold items. Relates to commission success fee. If set, minimum value 1.
     */
    public function setSoldQuantity(?int $soldQuantity): self
    {
        $this->initialized['soldQuantity'] = true;
        $this->soldQuantity = $soldQuantity;

        return $this;
    }

    /**
     * Offer type. 'type' or 'shop' fields must be provided. Takes precedence over 'shop' field. **Note:** if type = 'advertisement' then either 'quantity' or 'soldQuantity' field must be set.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Offer type. 'type' or 'shop' fields must be provided. Takes precedence over 'shop' field. **Note:** if type = 'advertisement' then either 'quantity' or 'soldQuantity' field must be set.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(?float $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;

        return $this;
    }

    public function getBold(): ?bool
    {
        return $this->bold;
    }

    public function setBold(?bool $bold): self
    {
        $this->initialized['bold'] = true;
        $this->bold = $bold;

        return $this;
    }

    public function getHighlight(): ?bool
    {
        return $this->highlight;
    }

    public function setHighlight(?bool $highlight): self
    {
        $this->initialized['highlight'] = true;
        $this->highlight = $highlight;

        return $this;
    }

    public function getDepartmentPage(): ?bool
    {
        return $this->departmentPage;
    }

    public function setDepartmentPage(?bool $departmentPage): self
    {
        $this->initialized['departmentPage'] = true;
        $this->departmentPage = $departmentPage;

        return $this;
    }

    public function getEmphasized(): ?bool
    {
        return $this->emphasized;
    }

    public function setEmphasized(?bool $emphasized): self
    {
        $this->initialized['emphasized'] = true;
        $this->emphasized = $emphasized;

        return $this;
    }

    public function getEmphasizedHighlightBoldPackage(): ?bool
    {
        return $this->emphasizedHighlightBoldPackage;
    }

    public function setEmphasizedHighlightBoldPackage(?bool $emphasizedHighlightBoldPackage): self
    {
        $this->initialized['emphasizedHighlightBoldPackage'] = true;
        $this->emphasizedHighlightBoldPackage = $emphasizedHighlightBoldPackage;

        return $this;
    }

    public function getMultiVariant(): ?bool
    {
        return $this->multiVariant;
    }

    public function setMultiVariant(?bool $multiVariant): self
    {
        $this->initialized['multiVariant'] = true;
        $this->multiVariant = $multiVariant;

        return $this;
    }
}
