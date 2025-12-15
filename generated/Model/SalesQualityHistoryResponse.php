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

class SalesQualityHistoryResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<SalesQualityForDay>|null
     */
    protected $quality;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<SalesQualityForDay>|null
     */
    public function getQuality(): ?array
    {
        return $this->quality;
    }

    /**
     * @param list<SalesQualityForDay>|null $quality
     */
    public function setQuality(?array $quality): self
    {
        $this->initialized['quality'] = true;
        $this->quality = $quality;

        return $this;
    }
}
