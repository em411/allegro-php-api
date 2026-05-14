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

class OfferBundleDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Bundle ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Offers included in bundle.
     *
     * @var list<BundledOfferDTO>|null
     */
    protected $offers;
    /**
     * Bundle status on each marketplace.
     *
     * @var list<BundlePublicationDTO>|null
     */
    protected $publication;
    /**
     * Discounts on marketplaces.
     *
     * @var list<BundleDiscountDTO>|null
     */
    protected $discounts;
    /**
     * When this bundle was created in <a href="https://en.wikipedia.org/wiki/ISO_8601" target="_blank">ISO_8601</a> format.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Who created this bundle. It is set to: <ul> <li> `USER` for all bundles created by seller on Allegro web page or via public API;</li> <li> `ALLEGRO` when bundle was created <a href="https://allegro.pl/dla-sprzedajacych/automatycznie-laczymy-wybrane-oferty-w-zestaw-K6VYllRgbs0" target="_blank">automatically</a> by Allegro. </li> </ul>.
     *
     * @var string|null
     */
    protected $createdBy;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Bundle ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Bundle ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Offers included in bundle.
     *
     * @return list<BundledOfferDTO>|null
     */
    public function getOffers(): ?array
    {
        return $this->offers;
    }

    /**
     * Offers included in bundle.
     *
     * @param list<BundledOfferDTO>|null $offers
     */
    public function setOffers(?array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;

        return $this;
    }

    /**
     * Bundle status on each marketplace.
     *
     * @return list<BundlePublicationDTO>|null
     */
    public function getPublication(): ?array
    {
        return $this->publication;
    }

    /**
     * Bundle status on each marketplace.
     *
     * @param list<BundlePublicationDTO>|null $publication
     */
    public function setPublication(?array $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    /**
     * Discounts on marketplaces.
     *
     * @return list<BundleDiscountDTO>|null
     */
    public function getDiscounts(): ?array
    {
        return $this->discounts;
    }

    /**
     * Discounts on marketplaces.
     *
     * @param list<BundleDiscountDTO>|null $discounts
     */
    public function setDiscounts(?array $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;

        return $this;
    }

    /**
     * When this bundle was created in <a href="https://en.wikipedia.org/wiki/ISO_8601" target="_blank">ISO_8601</a> format.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * When this bundle was created in <a href="https://en.wikipedia.org/wiki/ISO_8601" target="_blank">ISO_8601</a> format.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Who created this bundle. It is set to: <ul> <li> `USER` for all bundles created by seller on Allegro web page or via public API;</li> <li> `ALLEGRO` when bundle was created <a href="https://allegro.pl/dla-sprzedajacych/automatycznie-laczymy-wybrane-oferty-w-zestaw-K6VYllRgbs0" target="_blank">automatically</a> by Allegro. </li> </ul>.
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    /**
     * Who created this bundle. It is set to: <ul> <li> `USER` for all bundles created by seller on Allegro web page or via public API;</li> <li> `ALLEGRO` when bundle was created <a href="https://allegro.pl/dla-sprzedajacych/automatycznie-laczymy-wybrane-oferty-w-zestaw-K6VYllRgbs0" target="_blank">automatically</a> by Allegro. </li> </ul>.
     */
    public function setCreatedBy(?string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;

        return $this;
    }
}
