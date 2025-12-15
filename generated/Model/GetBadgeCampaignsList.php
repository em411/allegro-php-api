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

class GetBadgeCampaignsList extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of badge campaigns.
     *
     * @var list<BadgeCampaign>|null
     */
    protected $badgeCampaigns;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of badge campaigns.
     *
     * @return list<BadgeCampaign>|null
     */
    public function getBadgeCampaigns(): ?array
    {
        return $this->badgeCampaigns;
    }

    /**
     * List of badge campaigns.
     *
     * @param list<BadgeCampaign>|null $badgeCampaigns
     */
    public function setBadgeCampaigns(?array $badgeCampaigns): self
    {
        $this->initialized['badgeCampaigns'] = true;
        $this->badgeCampaigns = $badgeCampaigns;

        return $this;
    }
}
