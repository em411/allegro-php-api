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

class SubsidyExcludeOfferItem extends \ArrayObject
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
     * @var SubsidyExcludeOfferItemMarketplace|null
     */
    protected $marketplace;
    /**
     * Timestamp when the offer processing completed (successfully or with failure). Null if the offer is still being processed.
     *
     * @var \DateTime|null
     */
    protected $completedAt;
    /**
     * Processing status of the offer.
     *
     * @var string|null
     */
    protected $status;
    /**
     * List of errors if processing failed.
     *
     * @var list<OfferError>|null
     */
    protected $errors;

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

    public function getMarketplace(): ?SubsidyExcludeOfferItemMarketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(?SubsidyExcludeOfferItemMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * Timestamp when the offer processing completed (successfully or with failure). Null if the offer is still being processed.
     */
    public function getCompletedAt(): ?\DateTime
    {
        return $this->completedAt;
    }

    /**
     * Timestamp when the offer processing completed (successfully or with failure). Null if the offer is still being processed.
     */
    public function setCompletedAt(?\DateTime $completedAt): self
    {
        $this->initialized['completedAt'] = true;
        $this->completedAt = $completedAt;

        return $this;
    }

    /**
     * Processing status of the offer.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Processing status of the offer.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * List of errors if processing failed.
     *
     * @return list<OfferError>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * List of errors if processing failed.
     *
     * @param list<OfferError>|null $errors
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}
