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

class BadgeOperation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Badge operation ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Badge operation type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * @var BadgeApplicationCampaign|null
     */
    protected $campaign;
    /**
     * @var BadgeApplicationOffer|null
     */
    protected $offer;
    /**
     * Information about processing of the request/operation.
     *
     * @var BadgeOperationProcess|null
     */
    protected $process;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Badge operation ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Badge operation ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Badge operation type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Badge operation type.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601).
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCampaign(): ?BadgeApplicationCampaign
    {
        return $this->campaign;
    }

    public function setCampaign(?BadgeApplicationCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;

        return $this;
    }

    public function getOffer(): ?BadgeApplicationOffer
    {
        return $this->offer;
    }

    public function setOffer(?BadgeApplicationOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    /**
     * Information about processing of the request/operation.
     */
    public function getProcess(): ?BadgeOperationProcess
    {
        return $this->process;
    }

    /**
     * Information about processing of the request/operation.
     */
    public function setProcess(?BadgeOperationProcess $process): self
    {
        $this->initialized['process'] = true;
        $this->process = $process;

        return $this;
    }
}
