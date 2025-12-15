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

class BadgeApplications extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<BadgeApplication>|null
     */
    protected $badgeApplications;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<BadgeApplication>|null
     */
    public function getBadgeApplications(): ?array
    {
        return $this->badgeApplications;
    }

    /**
     * @param list<BadgeApplication>|null $badgeApplications
     */
    public function setBadgeApplications(?array $badgeApplications): self
    {
        $this->initialized['badgeApplications'] = true;
        $this->badgeApplications = $badgeApplications;

        return $this;
    }
}
