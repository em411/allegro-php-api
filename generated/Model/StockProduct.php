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

class StockProduct extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The product identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The product name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * List of product's GTIN numbers.
     *
     * @var list<string>|null
     */
    protected $gtins;
    /**
     * The product image.
     *
     * @var string|null
     */
    protected $image;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The product identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The product identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The product name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The product name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * List of product's GTIN numbers.
     *
     * @return list<string>|null
     */
    public function getGtins(): ?array
    {
        return $this->gtins;
    }

    /**
     * List of product's GTIN numbers.
     *
     * @param list<string>|null $gtins
     */
    public function setGtins(?array $gtins): self
    {
        $this->initialized['gtins'] = true;
        $this->gtins = $gtins;

        return $this;
    }

    /**
     * The product image.
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * The product image.
     */
    public function setImage(?string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;

        return $this;
    }
}
