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

class BadgeApplicationPurchaseConstraintsLimit extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Limits of purchase of this offer per user while it participates in the campaign.
     *
     * @var BadgeApplicationPurchaseConstraintsLimitPerUser|null
     */
    protected $perUser;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Limits of purchase of this offer per user while it participates in the campaign.
     */
    public function getPerUser(): ?BadgeApplicationPurchaseConstraintsLimitPerUser
    {
        return $this->perUser;
    }

    /**
     * Limits of purchase of this offer per user while it participates in the campaign.
     */
    public function setPerUser(?BadgeApplicationPurchaseConstraintsLimitPerUser $perUser): self
    {
        $this->initialized['perUser'] = true;
        $this->perUser = $perUser;

        return $this;
    }
}
