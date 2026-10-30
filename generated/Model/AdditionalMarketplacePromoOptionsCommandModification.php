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

class AdditionalMarketplacePromoOptionsCommandModification implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $marketplaceId;
    /**
     * @var PromoOptionsCommandModification|null
     */
    protected $modification;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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

    public function getModification(): ?PromoOptionsCommandModification
    {
        return $this->modification;
    }

    public function setModification(?PromoOptionsCommandModification $modification): self
    {
        $this->initialized['modification'] = true;
        $this->modification = $modification;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['marketplaceId' => ['marketplaceId', 'getMarketplaceId', 'setMarketplaceId'], 'modification' => ['modification', 'getModification', 'setModification']];
    }
}
