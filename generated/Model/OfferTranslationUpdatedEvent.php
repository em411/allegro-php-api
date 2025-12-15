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

class OfferTranslationUpdatedEvent extends SellerOfferBaseEvent
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var OfferEventExternalOffer|null
     */
    protected $offer;
    /**
     * @var list<ChangedTranslation>|null
     */
    protected $translations;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getOffer(): ?OfferEventExternalOffer
    {
        return $this->offer;
    }

    public function setOffer(?OfferEventExternalOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    /**
     * @return list<ChangedTranslation>|null
     */
    public function getTranslations(): ?array
    {
        return $this->translations;
    }

    /**
     * @param list<ChangedTranslation>|null $translations
     */
    public function setTranslations(?array $translations): self
    {
        $this->initialized['translations'] = true;
        $this->translations = $translations;

        return $this;
    }
}
