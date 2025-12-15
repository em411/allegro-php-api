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

class DepositType extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The deposit ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The deposit description.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The id of a marketplace.<br/> Available marketplaces can be determined using <a href="#operation/marketplacesGET">GET /marketplaces</a>.
     *
     * @var string|null
     */
    protected $marketplaceId;
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $price;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The deposit ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The deposit ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The deposit description.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The deposit description.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The id of a marketplace.<br/> Available marketplaces can be determined using <a href="#operation/marketplacesGET">GET /marketplaces</a>.
     */
    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    /**
     * The id of a marketplace.<br/> Available marketplaces can be determined using <a href="#operation/marketplacesGET">GET /marketplaces</a>.
     */
    public function setMarketplaceId(?string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;

        return $this;
    }

    /**
     * The price data.
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }

    /**
     * The price data.
     */
    public function setPrice(?Price $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }
}
