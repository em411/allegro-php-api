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

class OfferEventExternalOfferWithPublication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The offer ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The information on the offer in an external system.
     *
     * @var ExternalId|null
     */
    protected $external;
    /**
     * Offer publication data.
     *
     * @var OfferMarketplacesPublication|null
     */
    protected $publication;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The offer ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The offer ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The information on the offer in an external system.
     */
    public function getExternal(): ?ExternalId
    {
        return $this->external;
    }

    /**
     * The information on the offer in an external system.
     */
    public function setExternal(?ExternalId $external): self
    {
        $this->initialized['external'] = true;
        $this->external = $external;

        return $this;
    }

    /**
     * Offer publication data.
     */
    public function getPublication(): ?OfferMarketplacesPublication
    {
        return $this->publication;
    }

    /**
     * Offer publication data.
     */
    public function setPublication(?OfferMarketplacesPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }
}
