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

class OfferEventCampaignParticipation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Campaign participation identifier, independent of the seller's external offer identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * @var OfferEventCampaignParticipationCampaign|null
     */
    protected $campaign;
    /**
     * Offer participation state, distinct from the offer's publication status. New values may be introduced; consumers should preserve unknown strings. Known values include: - SUBMITTED - application submitted, awaiting verification. - PLANNING - verification passed, waiting for participation dates to be planned. - REJECTED - application rejected during verification. - ACCEPTED - application accepted, awaiting publication. - ACTIVE - offer participates actively in the campaign. - FINISHED - participation has ended. - DECLINED - offer has been declined from the campaign.
     *
     * @var string|null
     */
    protected $state;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Campaign participation identifier, independent of the seller's external offer identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Campaign participation identifier, independent of the seller's external offer identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCampaign(): ?OfferEventCampaignParticipationCampaign
    {
        return $this->campaign;
    }

    public function setCampaign(?OfferEventCampaignParticipationCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * Offer participation state, distinct from the offer's publication status. New values may be introduced; consumers should preserve unknown strings. Known values include: - SUBMITTED - application submitted, awaiting verification. - PLANNING - verification passed, waiting for participation dates to be planned. - REJECTED - application rejected during verification. - ACCEPTED - application accepted, awaiting publication. - ACTIVE - offer participates actively in the campaign. - FINISHED - participation has ended. - DECLINED - offer has been declined from the campaign.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Offer participation state, distinct from the offer's publication status. New values may be introduced; consumers should preserve unknown strings. Known values include: - SUBMITTED - application submitted, awaiting verification. - PLANNING - verification passed, waiting for participation dates to be planned. - REJECTED - application rejected during verification. - ACCEPTED - application accepted, awaiting publication. - ACTIVE - offer participates actively in the campaign. - FINISHED - participation has ended. - DECLINED - offer has been declined from the campaign.
     */
    public function setState(?string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'campaign' => ['campaign', 'getCampaign', 'setCampaign'], 'state' => ['state', 'getState', 'setState']];
    }
}
