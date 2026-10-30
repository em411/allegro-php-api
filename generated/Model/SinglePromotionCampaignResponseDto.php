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

class SinglePromotionCampaignResponseDto implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var CampaignResponseDto|null
     */
    protected $campaign;
    /**
     * @var PromotionResponseDto|null
     */
    protected $promotion;
    /**
     * @var string|null
     */
    protected $status;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getCampaign(): ?CampaignResponseDto
    {
        return $this->campaign;
    }

    public function setCampaign(?CampaignResponseDto $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;

        return $this;
    }

    public function getPromotion(): ?PromotionResponseDto
    {
        return $this->promotion;
    }

    public function setPromotion(?PromotionResponseDto $promotion): self
    {
        $this->initialized['promotion'] = true;
        $this->promotion = $promotion;

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

    public function definedProperties(): array
    {
        return ['campaign' => ['campaign', 'getCampaign', 'setCampaign'], 'promotion' => ['promotion', 'getPromotion', 'setPromotion'], 'status' => ['status', 'getStatus', 'setStatus']];
    }
}
