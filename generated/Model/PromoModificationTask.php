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

class PromoModificationTask extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var OfferId|null
     */
    protected $offer;
    /**
     * @var string|null
     */
    protected $marketplaceId;
    /**
     * Date on which the promotion modification task was scheduled: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @var \DateTime|null
     */
    protected $scheduledAt;
    /**
     * Date on which the promotion modification task finished processing: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     *
     * @var \DateTime|null
     */
    protected $finishedAt;
    /**
     * @var string|null
     */
    protected $status;
    /**
     * The list of all the error objects explaining the error.
     *
     * @var list<Error>|null
     */
    protected $errors;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getOffer(): ?OfferId
    {
        return $this->offer;
    }

    public function setOffer(?OfferId $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    public function setMarketplaceId(?string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;

        return $this;
    }

    /**
     * Date on which the promotion modification task was scheduled: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public function getScheduledAt(): ?\DateTime
    {
        return $this->scheduledAt;
    }

    /**
     * Date on which the promotion modification task was scheduled: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public function setScheduledAt(?\DateTime $scheduledAt): self
    {
        $this->initialized['scheduledAt'] = true;
        $this->scheduledAt = $scheduledAt;

        return $this;
    }

    /**
     * Date on which the promotion modification task finished processing: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public function getFinishedAt(): ?\DateTime
    {
        return $this->finishedAt;
    }

    /**
     * Date on which the promotion modification task finished processing: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public function setFinishedAt(?\DateTime $finishedAt): self
    {
        $this->initialized['finishedAt'] = true;
        $this->finishedAt = $finishedAt;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * The list of all the error objects explaining the error.
     *
     * @return list<Error>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * The list of all the error objects explaining the error.
     *
     * @param list<Error>|null $errors
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}
