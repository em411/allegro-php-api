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

class SaleProductCompatibilityList extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Id of product-based compatibility list.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Type of compatibility list.
     *
     * @var string|null
     */
    protected $type = 'PRODUCT_BASED';
    /**
     * List of the compatible items.
     *
     * @var list<CompatibilityListItemProductBased>|null
     */
    protected $items;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Id of product-based compatibility list.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Id of product-based compatibility list.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Type of compatibility list.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of compatibility list.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * List of the compatible items.
     *
     * @return list<CompatibilityListItemProductBased>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * List of the compatible items.
     *
     * @param list<CompatibilityListItemProductBased>|null $items
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }
}
