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

class OfferTranslation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer description translation.
     *
     * @var OfferDescriptionTranslation|null
     */
    protected $description;
    /**
     * Language of the translation.
     *
     * @var string|null
     */
    protected $language;
    /**
     * Offer title translation.
     *
     * @var OfferTitleTranslation|null
     */
    protected $title;
    /**
     * Offer safety information translations.
     *
     * @var OfferSafetyInformationTranslation|null
     */
    protected $safetyInformation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer description translation.
     */
    public function getDescription(): ?OfferDescriptionTranslation
    {
        return $this->description;
    }

    /**
     * Offer description translation.
     */
    public function setDescription(?OfferDescriptionTranslation $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Language of the translation.
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Language of the translation.
     */
    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * Offer title translation.
     */
    public function getTitle(): ?OfferTitleTranslation
    {
        return $this->title;
    }

    /**
     * Offer title translation.
     */
    public function setTitle(?OfferTitleTranslation $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * Offer safety information translations.
     */
    public function getSafetyInformation(): ?OfferSafetyInformationTranslation
    {
        return $this->safetyInformation;
    }

    /**
     * Offer safety information translations.
     */
    public function setSafetyInformation(?OfferSafetyInformationTranslation $safetyInformation): self
    {
        $this->initialized['safetyInformation'] = true;
        $this->safetyInformation = $safetyInformation;

        return $this;
    }
}
