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

class ProductChangesResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of requested product changes.
     *
     * @var list<ProductChangeDto>|null
     */
    protected $productChanges;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of requested product changes.
     *
     * @return list<ProductChangeDto>|null
     */
    public function getProductChanges(): ?array
    {
        return $this->productChanges;
    }

    /**
     * List of requested product changes.
     *
     * @param list<ProductChangeDto>|null $productChanges
     */
    public function setProductChanges(?array $productChanges): self
    {
        $this->initialized['productChanges'] = true;
        $this->productChanges = $productChanges;

        return $this;
    }
}
