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

class BadgeCampaign extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Badge campaign ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Badge campaign name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Identifies a marketplace.
     *
     * @var MarketplaceReference|null
     */
    protected $marketplace;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * Summary of user eligibility for participation in the campaign.
     *
     * @var UserCampaignEligibility|null
     */
    protected $eligibility;
    /**
     * Time period when the campaign is open for applying for badge.
     *
     * @var ApplicationTimePolicy|null
     */
    protected $application;
    /**
     * Time period when the campaign is visible in <a href="https://allegro.pl/moje-allegro/sprzedaz/moje-oferty" target="_blank">My Allegro</a> and <a href="https://ms.allegro.pl/seller-offers/" target="_blank">Sales Manager (Menedżer sprzedaży)</a> (it is not equal to the time period when badges are displayed on the list of offers or on the offer page).
     *
     * @var VisibilityTimePolicy|null
     */
    protected $visibility;
    /**
     * Time period when the badge is displayed on the list of offers or on the offer page.
     *
     * @var PublicationTimePolicy|null
     */
    protected $publication;
    /**
     * Link to campaign Terms & Conditions.
     *
     * @var string|null
     */
    protected $regulationsLink;
    /**
     * Flag informing whether stock declaration is required.
     *
     * @var bool|null
     */
    protected $stockReservationIsRequired;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Badge campaign ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Badge campaign ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Badge campaign name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Badge campaign name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Identifies a marketplace.
     */
    public function getMarketplace(): ?MarketplaceReference
    {
        return $this->marketplace;
    }

    /**
     * Identifies a marketplace.
     */
    public function setMarketplace(?MarketplaceReference $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Summary of user eligibility for participation in the campaign.
     */
    public function getEligibility(): ?UserCampaignEligibility
    {
        return $this->eligibility;
    }

    /**
     * Summary of user eligibility for participation in the campaign.
     */
    public function setEligibility(?UserCampaignEligibility $eligibility): self
    {
        $this->initialized['eligibility'] = true;
        $this->eligibility = $eligibility;

        return $this;
    }

    /**
     * Time period when the campaign is open for applying for badge.
     */
    public function getApplication(): ?ApplicationTimePolicy
    {
        return $this->application;
    }

    /**
     * Time period when the campaign is open for applying for badge.
     */
    public function setApplication(?ApplicationTimePolicy $application): self
    {
        $this->initialized['application'] = true;
        $this->application = $application;

        return $this;
    }

    /**
     * Time period when the campaign is visible in <a href="https://allegro.pl/moje-allegro/sprzedaz/moje-oferty" target="_blank">My Allegro</a> and <a href="https://ms.allegro.pl/seller-offers/" target="_blank">Sales Manager (Menedżer sprzedaży)</a> (it is not equal to the time period when badges are displayed on the list of offers or on the offer page).
     */
    public function getVisibility(): ?VisibilityTimePolicy
    {
        return $this->visibility;
    }

    /**
     * Time period when the campaign is visible in <a href="https://allegro.pl/moje-allegro/sprzedaz/moje-oferty" target="_blank">My Allegro</a> and <a href="https://ms.allegro.pl/seller-offers/" target="_blank">Sales Manager (Menedżer sprzedaży)</a> (it is not equal to the time period when badges are displayed on the list of offers or on the offer page).
     */
    public function setVisibility(?VisibilityTimePolicy $visibility): self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Time period when the badge is displayed on the list of offers or on the offer page.
     */
    public function getPublication(): ?PublicationTimePolicy
    {
        return $this->publication;
    }

    /**
     * Time period when the badge is displayed on the list of offers or on the offer page.
     */
    public function setPublication(?PublicationTimePolicy $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    /**
     * Link to campaign Terms & Conditions.
     */
    public function getRegulationsLink(): ?string
    {
        return $this->regulationsLink;
    }

    /**
     * Link to campaign Terms & Conditions.
     */
    public function setRegulationsLink(?string $regulationsLink): self
    {
        $this->initialized['regulationsLink'] = true;
        $this->regulationsLink = $regulationsLink;

        return $this;
    }

    /**
     * Flag informing whether stock declaration is required.
     */
    public function getStockReservationIsRequired(): ?bool
    {
        return $this->stockReservationIsRequired;
    }

    /**
     * Flag informing whether stock declaration is required.
     */
    public function setStockReservationIsRequired(?bool $stockReservationIsRequired): self
    {
        $this->initialized['stockReservationIsRequired'] = true;
        $this->stockReservationIsRequired = $stockReservationIsRequired;

        return $this;
    }
}
