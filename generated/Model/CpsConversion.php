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

class CpsConversion extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Unique identifier of the conversion.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Current status of the conversion.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Date and time when the conversion was last modified.
     *
     * @var \DateTime|null
     */
    protected $lastModifiedAt;
    /**
     * Date and time when the related order was created.
     *
     * @var \DateTime|null
     */
    protected $orderCreatedAt;
    /**
     * Number of ordered items associated with the conversion subtracted by number of items returned.
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * Information about the marketplace.
     *
     * @var CpsConversionMarketplace|null
     */
    protected $marketplace;
    /**
     * Information about the offer.
     *
     * @var CpsConversionOffer|null
     */
    protected $offer;
    /**
     * Commission information.
     *
     * @var CpsConversionCommission|null
     */
    protected $commission;
    /**
     * Parameters from the publisher's URL.
     *
     * @var array<string, string>|null
     */
    protected $publisherUrlParameters;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique identifier of the conversion.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Unique identifier of the conversion.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Current status of the conversion.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Current status of the conversion.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Date and time when the conversion was last modified.
     */
    public function getLastModifiedAt(): ?\DateTime
    {
        return $this->lastModifiedAt;
    }

    /**
     * Date and time when the conversion was last modified.
     */
    public function setLastModifiedAt(?\DateTime $lastModifiedAt): self
    {
        $this->initialized['lastModifiedAt'] = true;
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * Date and time when the related order was created.
     */
    public function getOrderCreatedAt(): ?\DateTime
    {
        return $this->orderCreatedAt;
    }

    /**
     * Date and time when the related order was created.
     */
    public function setOrderCreatedAt(?\DateTime $orderCreatedAt): self
    {
        $this->initialized['orderCreatedAt'] = true;
        $this->orderCreatedAt = $orderCreatedAt;

        return $this;
    }

    /**
     * Number of ordered items associated with the conversion subtracted by number of items returned.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Number of ordered items associated with the conversion subtracted by number of items returned.
     */
    public function setQuantity(?int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Information about the marketplace.
     */
    public function getMarketplace(): ?CpsConversionMarketplace
    {
        return $this->marketplace;
    }

    /**
     * Information about the marketplace.
     */
    public function setMarketplace(?CpsConversionMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * Information about the offer.
     */
    public function getOffer(): ?CpsConversionOffer
    {
        return $this->offer;
    }

    /**
     * Information about the offer.
     */
    public function setOffer(?CpsConversionOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    /**
     * Commission information.
     */
    public function getCommission(): ?CpsConversionCommission
    {
        return $this->commission;
    }

    /**
     * Commission information.
     */
    public function setCommission(?CpsConversionCommission $commission): self
    {
        $this->initialized['commission'] = true;
        $this->commission = $commission;

        return $this;
    }

    /**
     * Parameters from the publisher's URL.
     *
     * @return array<string, string>|null
     */
    public function getPublisherUrlParameters(): ?iterable
    {
        return $this->publisherUrlParameters;
    }

    /**
     * Parameters from the publisher's URL.
     *
     * @param array<string, string>|null $publisherUrlParameters
     */
    public function setPublisherUrlParameters(?iterable $publisherUrlParameters): self
    {
        $this->initialized['publisherUrlParameters'] = true;
        $this->publisherUrlParameters = $publisherUrlParameters;

        return $this;
    }
}
