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

class OfferReference extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $id;
    /**
     * Offer name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The information on the offer in an external system.
     *
     * @var ExternalId|null
     */
    protected $external;
    /**
     * If the offer was a product set, you can see a list of component products (product id with quantity).
     *
     * @var OfferProductSetReference|null
     */
    protected $productSet;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Offer name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Offer name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

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
     * If the offer was a product set, you can see a list of component products (product id with quantity).
     */
    public function getProductSet(): ?OfferProductSetReference
    {
        return $this->productSet;
    }

    /**
     * If the offer was a product set, you can see a list of component products (product id with quantity).
     */
    public function setProductSet(?OfferProductSetReference $productSet): self
    {
        $this->initialized['productSet'] = true;
        $this->productSet = $productSet;

        return $this;
    }
}
