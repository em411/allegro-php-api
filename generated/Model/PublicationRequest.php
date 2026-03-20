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

class PublicationRequest extends \ArrayObject
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
}
