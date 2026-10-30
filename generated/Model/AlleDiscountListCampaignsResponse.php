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

class AlleDiscountListCampaignsResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Array of the available AlleDiscount campaigns.
     *
     * @var list<AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem>|null
     */
    protected $alleDiscountCampaigns;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Array of the available AlleDiscount campaigns.
     *
     * @return list<AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem>|null
     */
    public function getAlleDiscountCampaigns(): ?array
    {
        return $this->alleDiscountCampaigns;
    }

    /**
     * Array of the available AlleDiscount campaigns.
     *
     * @param list<AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem>|null $alleDiscountCampaigns
     */
    public function setAlleDiscountCampaigns(?array $alleDiscountCampaigns): self
    {
        $this->initialized['alleDiscountCampaigns'] = true;
        $this->alleDiscountCampaigns = $alleDiscountCampaigns;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['alleDiscountCampaigns' => ['alleDiscountCampaigns', 'getAlleDiscountCampaigns', 'setAlleDiscountCampaigns']];
    }
}
