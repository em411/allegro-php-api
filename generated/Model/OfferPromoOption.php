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

class OfferPromoOption extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Promotion package identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Date from which the promotion package is valid: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @var \DateTime|null
     */
    protected $validFrom;
    /**
     * Date to which the promotion package is valid: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @var \DateTime|null
     */
    protected $validTo;
    /**
     * Date on which the promotion package will be renewed for a new cycle: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @var \DateTime|null
     */
    protected $nextCycleDate;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Promotion package identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Promotion package identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Date from which the promotion package is valid: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public function getValidFrom(): ?\DateTime
    {
        return $this->validFrom;
    }

    /**
     * Date from which the promotion package is valid: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public function setValidFrom(?\DateTime $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * Date to which the promotion package is valid: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public function getValidTo(): ?\DateTime
    {
        return $this->validTo;
    }

    /**
     * Date to which the promotion package is valid: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public function setValidTo(?\DateTime $validTo): self
    {
        $this->initialized['validTo'] = true;
        $this->validTo = $validTo;

        return $this;
    }

    /**
     * Date on which the promotion package will be renewed for a new cycle: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public function getNextCycleDate(): ?\DateTime
    {
        return $this->nextCycleDate;
    }

    /**
     * Date on which the promotion package will be renewed for a new cycle: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public function setNextCycleDate(?\DateTime $nextCycleDate): self
    {
        $this->initialized['nextCycleDate'] = true;
        $this->nextCycleDate = $nextCycleDate;

        return $this;
    }
}
