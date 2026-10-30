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

class LineItemAllegroAds implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates whether the purchase of this line item was attributed to an Allegro Ads campaign.
     *
     * @var bool|null
     */
    protected $attributed;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates whether the purchase of this line item was attributed to an Allegro Ads campaign.
     */
    public function getAttributed(): ?bool
    {
        return $this->attributed;
    }

    /**
     * Indicates whether the purchase of this line item was attributed to an Allegro Ads campaign.
     */
    public function setAttributed(?bool $attributed): self
    {
        $this->initialized['attributed'] = true;
        $this->attributed = $attributed;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['attributed' => ['attributed', 'getAttributed', 'setAttributed']];
    }
}
