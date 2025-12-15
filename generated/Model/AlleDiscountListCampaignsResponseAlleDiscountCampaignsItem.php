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

class AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The id of the campaign.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Name of the campaign.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Field providing info about the type of the campaign. Two possible values:
     *   - SOURCING - no additional requirements.
     *   - DISCOUNT - requires price lower than the lowest from 30 days, created badge has crossed out price.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Time period when the campaign is visible in My Allegro.
     *
     * @var AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemVisibility|null
     */
    protected $visibility;
    /**
     * Time period when the campaign is open for offer submission.
     *
     * @var AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplication|null
     */
    protected $application;
    /**
     * Time period when reduced price (and possible badge if it applies for campaign) is displayed on the list of offers or on the offer page.
     *
     * @var AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemPublication|null
     */
    protected $publication;
    /**
     * Campaign marketplace data.
     *
     * @var AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplace|null
     */
    protected $marketplace;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The id of the campaign.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The id of the campaign.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Name of the campaign.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the campaign.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Field providing info about the type of the campaign. Two possible values:
     *   - SOURCING - no additional requirements.
     *   - DISCOUNT - requires price lower than the lowest from 30 days, created badge has crossed out price.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Field providing info about the type of the campaign. Two possible values:
     * - SOURCING - no additional requirements.
     * - DISCOUNT - requires price lower than the lowest from 30 days, created badge has crossed out price.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Time period when the campaign is visible in My Allegro.
     */
    public function getVisibility(): ?AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemVisibility
    {
        return $this->visibility;
    }

    /**
     * Time period when the campaign is visible in My Allegro.
     */
    public function setVisibility(?AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemVisibility $visibility): self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Time period when the campaign is open for offer submission.
     */
    public function getApplication(): ?AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplication
    {
        return $this->application;
    }

    /**
     * Time period when the campaign is open for offer submission.
     */
    public function setApplication(?AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplication $application): self
    {
        $this->initialized['application'] = true;
        $this->application = $application;

        return $this;
    }

    /**
     * Time period when reduced price (and possible badge if it applies for campaign) is displayed on the list of offers or on the offer page.
     */
    public function getPublication(): ?AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemPublication
    {
        return $this->publication;
    }

    /**
     * Time period when reduced price (and possible badge if it applies for campaign) is displayed on the list of offers or on the offer page.
     */
    public function setPublication(?AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    /**
     * Campaign marketplace data.
     */
    public function getMarketplace(): ?AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplace
    {
        return $this->marketplace;
    }

    /**
     * Campaign marketplace data.
     */
    public function setMarketplace(?AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplace $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }
}
