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

class Publication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $duration;
    /**
     * Publication starting date: Format (ISO 8601) - <code>yyyy-MM-dd'T'HH:mm:ss.SSSZ</code>. Cannot be modified after activation or ending of the offer.
     *
     * @var \DateTime|null
     */
    protected $startingAt;
    /**
     * The publication status of the current offer. The possible values:
     *
     *   - *INACTIVE* - a draft offer
     *   - *ACTIVATING* - the offer is planned for listing or is during the process of activation
     *   - *ACTIVE* - the offer is active
     *   - *ENDED* - the offer was active and is now ended (for whatever reason)
     *
     * @var string|null
     */
    protected $status;
    /**
     * Whether to republish an offer after ending. Automatically republish offers or auctions:</br> - `BUY_NOW` offer type are republished with initial stock, regardless of how many items you have sold.</br> - `AUCTION` offer type are republished only if they were not concluded with purchase.</br> - `ADVERTISEMENT` offer type are republished until it will be finished manually.
     *
     * @var bool|null
     */
    protected $republish;
    /**
     * @var \DateTime|null
     */
    protected $endingAt;
    /**
     * Indicates the reason for ending the offer: - `USER` - offer ended by the seller. - `ADMIN` - offer ended by an admin. - `EXPIRATION` - offer duration had expired (valid for offers with specified duration). - `EMPTY_STOCK` - offer ended because all available items had been sold out. - `PRODUCT_DETACHMENT` - offer ended because its link to the product was removed. Status will only occur
     *   if the base marketplace of offer requires full productization.
     * - `ERROR` - offer ended due to internal problem with offer publication. The publication command responded with
     *   success status, but further processing failed.
     *
     * @var string|null
     */
    protected $endedBy;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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

    /**
     * Publication starting date: Format (ISO 8601) - <code>yyyy-MM-dd'T'HH:mm:ss.SSSZ</code>. Cannot be modified after activation or ending of the offer.
     */
    public function getStartingAt(): ?\DateTime
    {
        return $this->startingAt;
    }

    /**
     * Publication starting date: Format (ISO 8601) - <code>yyyy-MM-dd'T'HH:mm:ss.SSSZ</code>. Cannot be modified after activation or ending of the offer.
     */
    public function setStartingAt(?\DateTime $startingAt): self
    {
        $this->initialized['startingAt'] = true;
        $this->startingAt = $startingAt;

        return $this;
    }

    /**
     * The publication status of the current offer. The possible values:
     *
     *   - *INACTIVE* - a draft offer
     *   - *ACTIVATING* - the offer is planned for listing or is during the process of activation
     *   - *ACTIVE* - the offer is active
     *   - *ENDED* - the offer was active and is now ended (for whatever reason)
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The publication status of the current offer. The possible values:
     *
     * - *INACTIVE* - a draft offer
     * - *ACTIVATING* - the offer is planned for listing or is during the process of activation
     * - *ACTIVE* - the offer is active
     * - *ENDED* - the offer was active and is now ended (for whatever reason)
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Whether to republish an offer after ending. Automatically republish offers or auctions:</br> - `BUY_NOW` offer type are republished with initial stock, regardless of how many items you have sold.</br> - `AUCTION` offer type are republished only if they were not concluded with purchase.</br> - `ADVERTISEMENT` offer type are republished until it will be finished manually.
     */
    public function getRepublish(): ?bool
    {
        return $this->republish;
    }

    /**
     * Whether to republish an offer after ending. Automatically republish offers or auctions:</br> - `BUY_NOW` offer type are republished with initial stock, regardless of how many items you have sold.</br> - `AUCTION` offer type are republished only if they were not concluded with purchase.</br> - `ADVERTISEMENT` offer type are republished until it will be finished manually.
     */
    public function setRepublish(?bool $republish): self
    {
        $this->initialized['republish'] = true;
        $this->republish = $republish;

        return $this;
    }

    public function getEndingAt(): ?\DateTime
    {
        return $this->endingAt;
    }

    public function setEndingAt(?\DateTime $endingAt): self
    {
        $this->initialized['endingAt'] = true;
        $this->endingAt = $endingAt;

        return $this;
    }

    /**
     * Indicates the reason for ending the offer: - `USER` - offer ended by the seller. - `ADMIN` - offer ended by an admin. - `EXPIRATION` - offer duration had expired (valid for offers with specified duration). - `EMPTY_STOCK` - offer ended because all available items had been sold out. - `PRODUCT_DETACHMENT` - offer ended because its link to the product was removed. Status will only occur
     *   if the base marketplace of offer requires full productization.
     * - `ERROR` - offer ended due to internal problem with offer publication. The publication command responded with
     *   success status, but further processing failed.
     */
    public function getEndedBy(): ?string
    {
        return $this->endedBy;
    }

    /**
     * Indicates the reason for ending the offer: - `USER` - offer ended by the seller. - `ADMIN` - offer ended by an admin. - `EXPIRATION` - offer duration had expired (valid for offers with specified duration). - `EMPTY_STOCK` - offer ended because all available items had been sold out. - `PRODUCT_DETACHMENT` - offer ended because its link to the product was removed. Status will only occur
     * if the base marketplace of offer requires full productization.
     * - `ERROR` - offer ended due to internal problem with offer publication. The publication command responded with
     * success status, but further processing failed.
     */
    public function setEndedBy(?string $endedBy): self
    {
        $this->initialized['endedBy'] = true;
        $this->endedBy = $endedBy;

        return $this;
    }
}
