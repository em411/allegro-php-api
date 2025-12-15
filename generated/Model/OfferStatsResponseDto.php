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

class OfferStatsResponseDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<OfferStatResponseDto>|null
     */
    protected $offerStats;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<OfferStatResponseDto>|null
     */
    public function getOfferStats(): ?array
    {
        return $this->offerStats;
    }

    /**
     * @param list<OfferStatResponseDto>|null $offerStats
     */
    public function setOfferStats(?array $offerStats): self
    {
        $this->initialized['offerStats'] = true;
        $this->offerStats = $offerStats;

        return $this;
    }
}
