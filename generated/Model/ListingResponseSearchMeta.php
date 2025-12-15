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

class ListingResponseSearchMeta extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The number of results available for navigation. If this number is less than total count, the search criteria (categories, filters, etc.) should be narrowed down to make all results available.
     *
     * @var int|null
     */
    protected $availableCount;
    /**
     * The total number of search results with given parameters.
     *
     * @var int|null
     */
    protected $totalCount;
    /**
     * Indicates whether the search fallback was used. If true, no items matching exact given phrase were found and related items are presented.
     *
     * @var bool|null
     */
    protected $fallback;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The number of results available for navigation. If this number is less than total count, the search criteria (categories, filters, etc.) should be narrowed down to make all results available.
     */
    public function getAvailableCount(): ?int
    {
        return $this->availableCount;
    }

    /**
     * The number of results available for navigation. If this number is less than total count, the search criteria (categories, filters, etc.) should be narrowed down to make all results available.
     */
    public function setAvailableCount(?int $availableCount): self
    {
        $this->initialized['availableCount'] = true;
        $this->availableCount = $availableCount;

        return $this;
    }

    /**
     * The total number of search results with given parameters.
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * The total number of search results with given parameters.
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Indicates whether the search fallback was used. If true, no items matching exact given phrase were found and related items are presented.
     */
    public function getFallback(): ?bool
    {
        return $this->fallback;
    }

    /**
     * Indicates whether the search fallback was used. If true, no items matching exact given phrase were found and related items are presented.
     */
    public function setFallback(?bool $fallback): self
    {
        $this->initialized['fallback'] = true;
        $this->fallback = $fallback;

        return $this;
    }
}
