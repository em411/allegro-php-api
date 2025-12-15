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

class OfferRequirements extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The id of the offer that can be associated with this product.
     *
     * @var string|null
     */
    protected $id;
    /**
     * @var list<ProductParameterDto>|null
     */
    protected $parameters;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The id of the offer that can be associated with this product.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The id of the offer that can be associated with this product.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * @return list<ProductParameterDto>|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * @param list<ProductParameterDto>|null $parameters
     */
    public function setParameters(?array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

        return $this;
    }
}
