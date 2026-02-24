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

class SubsidyOfferToSubmit extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * @var SubsidyOfferToSubmitMarketplace|null
     */
    protected $marketplace;
    /**
     * @var SubsidyOfferToSubmitSellerDiscountDeclaration|null
     */
    protected $sellerDiscountDeclaration;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Offer identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getMarketplace(): ?SubsidyOfferToSubmitMarketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(?SubsidyOfferToSubmitMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getSellerDiscountDeclaration(): ?SubsidyOfferToSubmitSellerDiscountDeclaration
    {
        return $this->sellerDiscountDeclaration;
    }

    public function setSellerDiscountDeclaration(?SubsidyOfferToSubmitSellerDiscountDeclaration $sellerDiscountDeclaration): self
    {
        $this->initialized['sellerDiscountDeclaration'] = true;
        $this->sellerDiscountDeclaration = $sellerDiscountDeclaration;

        return $this;
    }
}
