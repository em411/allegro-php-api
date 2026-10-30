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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class PromotionCampaignsResponseDto implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<SinglePromotionCampaignResponseDto>|null
     */
    protected $promotionCampaigns;
    /**
     * @var int|null
     */
    protected $totalCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<SinglePromotionCampaignResponseDto>|null
     */
    public function getPromotionCampaigns(): ?array
    {
        return $this->promotionCampaigns;
    }

    /**
     * @param list<SinglePromotionCampaignResponseDto>|null $promotionCampaigns
     */
    public function setPromotionCampaigns(?array $promotionCampaigns): self
    {
        $this->initialized['promotionCampaigns'] = true;
        $this->promotionCampaigns = $promotionCampaigns;

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

    public function definedProperties(): array
    {
        return ['promotionCampaigns' => ['promotionCampaigns', 'getPromotionCampaigns', 'setPromotionCampaigns'], 'totalCount' => ['totalCount', 'getTotalCount', 'setTotalCount']];
    }
}
