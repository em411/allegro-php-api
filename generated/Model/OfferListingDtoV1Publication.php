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

class OfferListingDtoV1Publication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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
     * The date and time of activation in UTC for a planned listing.
     *
     * @var string|null
     */
    protected $startingAt;
    /**
     * The actual date and time of activation in UTC.
     *
     * @var string|null
     */
    protected $startedAt;
    /**
     * The date and time of a planned ending in UTC.
     *
     * @var string|null
     */
    protected $endingAt;
    /**
     * The actual date and time of last ending in UTC.
     *
     * @var string|null
     */
    protected $endedAt;
    /**
     * Information on the offer's publication marketplaces.
     *
     * @var OfferListingDtoV1PublicationMarketplaces|null
     */
    protected $marketplaces;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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
     * The date and time of activation in UTC for a planned listing.
     */
    public function getStartingAt(): ?string
    {
        return $this->startingAt;
    }

    /**
     * The date and time of activation in UTC for a planned listing.
     */
    public function setStartingAt(?string $startingAt): self
    {
        $this->initialized['startingAt'] = true;
        $this->startingAt = $startingAt;

        return $this;
    }

    /**
     * The actual date and time of activation in UTC.
     */
    public function getStartedAt(): ?string
    {
        return $this->startedAt;
    }

    /**
     * The actual date and time of activation in UTC.
     */
    public function setStartedAt(?string $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;

        return $this;
    }

    /**
     * The date and time of a planned ending in UTC.
     */
    public function getEndingAt(): ?string
    {
        return $this->endingAt;
    }

    /**
     * The date and time of a planned ending in UTC.
     */
    public function setEndingAt(?string $endingAt): self
    {
        $this->initialized['endingAt'] = true;
        $this->endingAt = $endingAt;

        return $this;
    }

    /**
     * The actual date and time of last ending in UTC.
     */
    public function getEndedAt(): ?string
    {
        return $this->endedAt;
    }

    /**
     * The actual date and time of last ending in UTC.
     */
    public function setEndedAt(?string $endedAt): self
    {
        $this->initialized['endedAt'] = true;
        $this->endedAt = $endedAt;

        return $this;
    }

    /**
     * Information on the offer's publication marketplaces.
     */
    public function getMarketplaces(): ?OfferListingDtoV1PublicationMarketplaces
    {
        return $this->marketplaces;
    }

    /**
     * Information on the offer's publication marketplaces.
     */
    public function setMarketplaces(?OfferListingDtoV1PublicationMarketplaces $marketplaces): self
    {
        $this->initialized['marketplaces'] = true;
        $this->marketplaces = $marketplaces;

        return $this;
    }
}
