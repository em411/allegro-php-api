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

class CategoryOptionsDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates whether offers of type ADVERTISEMENT can be listed in this category.
     *
     * @var bool|null
     */
    protected $advertisement;
    /**
     * Information whether the category supports assigning offers to a product.
     *
     * @var bool|null
     */
    protected $offersWithProductPublicationEnabled;
    /**
     * Indicates whether the category supports creating products.
     *
     * @var bool|null
     */
    protected $productCreationEnabled;
    /**
     * Indicates whether the category supports message to seller in `REQUIRED` mode.
     *
     * @var bool|null
     */
    protected $sellerCanRequirePurchaseComments;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates whether offers of type ADVERTISEMENT can be listed in this category.
     */
    public function getAdvertisement(): ?bool
    {
        return $this->advertisement;
    }

    /**
     * Indicates whether offers of type ADVERTISEMENT can be listed in this category.
     */
    public function setAdvertisement(?bool $advertisement): self
    {
        $this->initialized['advertisement'] = true;
        $this->advertisement = $advertisement;

        return $this;
    }

    /**
     * Information whether the category supports assigning offers to a product.
     */
    public function getOffersWithProductPublicationEnabled(): ?bool
    {
        return $this->offersWithProductPublicationEnabled;
    }

    /**
     * Information whether the category supports assigning offers to a product.
     */
    public function setOffersWithProductPublicationEnabled(?bool $offersWithProductPublicationEnabled): self
    {
        $this->initialized['offersWithProductPublicationEnabled'] = true;
        $this->offersWithProductPublicationEnabled = $offersWithProductPublicationEnabled;

        return $this;
    }

    /**
     * Indicates whether the category supports creating products.
     */
    public function getProductCreationEnabled(): ?bool
    {
        return $this->productCreationEnabled;
    }

    /**
     * Indicates whether the category supports creating products.
     */
    public function setProductCreationEnabled(?bool $productCreationEnabled): self
    {
        $this->initialized['productCreationEnabled'] = true;
        $this->productCreationEnabled = $productCreationEnabled;

        return $this;
    }

    /**
     * Indicates whether the category supports message to seller in `REQUIRED` mode.
     */
    public function getSellerCanRequirePurchaseComments(): ?bool
    {
        return $this->sellerCanRequirePurchaseComments;
    }

    /**
     * Indicates whether the category supports message to seller in `REQUIRED` mode.
     */
    public function setSellerCanRequirePurchaseComments(?bool $sellerCanRequirePurchaseComments): self
    {
        $this->initialized['sellerCanRequirePurchaseComments'] = true;
        $this->sellerCanRequirePurchaseComments = $sellerCanRequirePurchaseComments;

        return $this;
    }
}
