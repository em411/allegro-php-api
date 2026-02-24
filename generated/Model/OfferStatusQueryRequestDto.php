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

class OfferStatusQueryRequestDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var OfferStatusQueryRequestDtoOffer|null
     */
    protected $offer;
    /**
     * @var OfferStatusQueryRequestDtoMarketplace|null
     */
    protected $marketplace;
    /**
     * Maximum number of offers to return in a single response. Must be between 1 and 1000.
     *
     * @var int|null
     */
    protected $limit = 20;
    /**
     * Number of offers to skip before starting to return results. Used for pagination. Must be at least 0.
     *
     * @var int|null
     */
    protected $offset = 0;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getOffer(): ?OfferStatusQueryRequestDtoOffer
    {
        return $this->offer;
    }

    public function setOffer(?OfferStatusQueryRequestDtoOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    public function getMarketplace(): ?OfferStatusQueryRequestDtoMarketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(?OfferStatusQueryRequestDtoMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * Maximum number of offers to return in a single response. Must be between 1 and 1000.
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * Maximum number of offers to return in a single response. Must be between 1 and 1000.
     */
    public function setLimit(?int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;

        return $this;
    }

    /**
     * Number of offers to skip before starting to return results. Used for pagination. Must be at least 0.
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }

    /**
     * Number of offers to skip before starting to return results. Used for pagination. Must be at least 0.
     */
    public function setOffset(?int $offset): self
    {
        $this->initialized['offset'] = true;
        $this->offset = $offset;

        return $this;
    }
}
