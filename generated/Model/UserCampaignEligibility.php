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

class UserCampaignEligibility extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Information whether user is eligible to participate in this campaign.
     *
     * @var bool|null
     */
    protected $eligible;
    /**
     * Information why user is not able to participate in the campaign.
     *
     * @var list<CampaignRefusalReason>|null
     */
    protected $refusalReasons;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Information whether user is eligible to participate in this campaign.
     */
    public function getEligible(): ?bool
    {
        return $this->eligible;
    }

    /**
     * Information whether user is eligible to participate in this campaign.
     */
    public function setEligible(?bool $eligible): self
    {
        $this->initialized['eligible'] = true;
        $this->eligible = $eligible;

        return $this;
    }

    /**
     * Information why user is not able to participate in the campaign.
     *
     * @return list<CampaignRefusalReason>|null
     */
    public function getRefusalReasons(): ?array
    {
        return $this->refusalReasons;
    }

    /**
     * Information why user is not able to participate in the campaign.
     *
     * @param list<CampaignRefusalReason>|null $refusalReasons
     */
    public function setRefusalReasons(?array $refusalReasons): self
    {
        $this->initialized['refusalReasons'] = true;
        $this->refusalReasons = $refusalReasons;

        return $this;
    }
}
