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

class SaleProductOfferRequestBasepublication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * This field must be set to one of the following:<br/> - for auctions: 1 day, 3 days, 5 days, 7 days, 10 days<br/> - for buy-now offers: 3 days, 5 days, 7 days, 10 days, 20 days, 30 days<br/> - for advertisements: 10 days, 20 days, 30 days.<br/> The value is in ISO 8601 format (example: PT24H, PT72H).
     *
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
     * Publication ending date: Format (ISO 8601) - <code>yyyy-MM-dd'T'HH:mm:ss.SSSZ</code>. Cannot be modified, except for charity auctions by selected partners and not after activation nor ending of the offer.
     *
     * @var \DateTime|null
     */
    protected $endingAt;
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * This field must be set to one of the following:<br/> - for auctions: 1 day, 3 days, 5 days, 7 days, 10 days<br/> - for buy-now offers: 3 days, 5 days, 7 days, 10 days, 20 days, 30 days<br/> - for advertisements: 10 days, 20 days, 30 days.<br/> The value is in ISO 8601 format (example: PT24H, PT72H).
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * This field must be set to one of the following:<br/> - for auctions: 1 day, 3 days, 5 days, 7 days, 10 days<br/> - for buy-now offers: 3 days, 5 days, 7 days, 10 days, 20 days, 30 days<br/> - for advertisements: 10 days, 20 days, 30 days.<br/> The value is in ISO 8601 format (example: PT24H, PT72H).
     */
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
     * Publication ending date: Format (ISO 8601) - <code>yyyy-MM-dd'T'HH:mm:ss.SSSZ</code>. Cannot be modified, except for charity auctions by selected partners and not after activation nor ending of the offer.
     */
    public function getEndingAt(): ?\DateTime
    {
        return $this->endingAt;
    }

    /**
     * Publication ending date: Format (ISO 8601) - <code>yyyy-MM-dd'T'HH:mm:ss.SSSZ</code>. Cannot be modified, except for charity auctions by selected partners and not after activation nor ending of the offer.
     */
    public function setEndingAt(?\DateTime $endingAt): self
    {
        $this->initialized['endingAt'] = true;
        $this->endingAt = $endingAt;

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
}
