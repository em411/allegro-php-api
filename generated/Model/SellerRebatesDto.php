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

class SellerRebatesDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<SellerRebateDto>|null
     */
    protected $promotions;
    /**
     * @var int|null
     */
    protected $totalCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<SellerRebateDto>|null
     */
    public function getPromotions(): ?array
    {
        return $this->promotions;
    }

    /**
     * @param list<SellerRebateDto>|null $promotions
     */
    public function setPromotions(?array $promotions): self
    {
        $this->initialized['promotions'] = true;
        $this->promotions = $promotions;

        return $this;
    }

    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }
}
