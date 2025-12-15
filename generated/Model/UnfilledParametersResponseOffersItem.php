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

class UnfilledParametersResponseOffersItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Identifier of the offer.
     *
     * @var string|null
     */
    protected $id;
    /**
     * List of unfilled parameters.
     *
     * @var list<UnfilledParametersResponseOffersItemParametersItem>|null
     */
    protected $parameters;
    /**
     * Category of offer with unfilled parameters.
     *
     * @var UnfilledParametersResponseOffersItemCategory|null
     */
    protected $category;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Identifier of the offer.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Identifier of the offer.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * List of unfilled parameters.
     *
     * @return list<UnfilledParametersResponseOffersItemParametersItem>|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * List of unfilled parameters.
     *
     * @param list<UnfilledParametersResponseOffersItemParametersItem>|null $parameters
     */
    public function setParameters(?array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Category of offer with unfilled parameters.
     */
    public function getCategory(): ?UnfilledParametersResponseOffersItemCategory
    {
        return $this->category;
    }

    /**
     * Category of offer with unfilled parameters.
     */
    public function setCategory(?UnfilledParametersResponseOffersItemCategory $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

        return $this;
    }
}
