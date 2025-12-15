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

class AdditionalServicesGroups extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<AdditionalServicesGroupResponse>|null
     */
    protected $additionalServicesGroups;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<AdditionalServicesGroupResponse>|null
     */
    public function getAdditionalServicesGroups(): ?array
    {
        return $this->additionalServicesGroups;
    }

    /**
     * @param list<AdditionalServicesGroupResponse>|null $additionalServicesGroups
     */
    public function setAdditionalServicesGroups(?array $additionalServicesGroups): self
    {
        $this->initialized['additionalServicesGroups'] = true;
        $this->additionalServicesGroups = $additionalServicesGroups;

        return $this;
    }
}
