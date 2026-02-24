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

class SubsidyExcludeOffersCommandPreview extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Unique identifier of the command.
     *
     * @var string|null
     */
    protected $commandId;
    /**
     * Timestamp when the command was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * List of excluded offers with their processing status.
     *
     * @var list<SubsidyExcludeOfferItem>|null
     */
    protected $offers;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique identifier of the command.
     */
    public function getCommandId(): ?string
    {
        return $this->commandId;
    }

    /**
     * Unique identifier of the command.
     */
    public function setCommandId(?string $commandId): self
    {
        $this->initialized['commandId'] = true;
        $this->commandId = $commandId;

        return $this;
    }

    /**
     * Timestamp when the command was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Timestamp when the command was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * List of excluded offers with their processing status.
     *
     * @return list<SubsidyExcludeOfferItem>|null
     */
    public function getOffers(): ?array
    {
        return $this->offers;
    }

    /**
     * List of excluded offers with their processing status.
     *
     * @param list<SubsidyExcludeOfferItem>|null $offers
     */
    public function setOffers(?array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;

        return $this;
    }
}
