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

class FundraisingCampaigns extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * search results.
     *
     * @var list<FundraisingCampaign>|null
     */
    protected $campaigns;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * search results.
     *
     * @return list<FundraisingCampaign>|null
     */
    public function getCampaigns(): ?array
    {
        return $this->campaigns;
    }

    /**
     * search results.
     *
     * @param list<FundraisingCampaign>|null $campaigns
     */
    public function setCampaigns(?array $campaigns): self
    {
        $this->initialized['campaigns'] = true;
        $this->campaigns = $campaigns;

        return $this;
    }
}
