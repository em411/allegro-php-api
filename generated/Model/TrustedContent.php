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

class TrustedContent extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Paths specify which product attributes need to remain consistent between the product and the offer.
     *
     * @var list<string>|null
     */
    protected $paths;
    /**
     * ProductPaths specify which product elements are considered trusted and are excluded from the product suggestion process.
     *
     * @var list<string>|null
     */
    protected $productPaths;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Paths specify which product attributes need to remain consistent between the product and the offer.
     *
     * @return list<string>|null
     */
    public function getPaths(): ?array
    {
        return $this->paths;
    }

    /**
     * Paths specify which product attributes need to remain consistent between the product and the offer.
     *
     * @param list<string>|null $paths
     */
    public function setPaths(?array $paths): self
    {
        $this->initialized['paths'] = true;
        $this->paths = $paths;

        return $this;
    }

    /**
     * ProductPaths specify which product elements are considered trusted and are excluded from the product suggestion process.
     *
     * @return list<string>|null
     */
    public function getProductPaths(): ?array
    {
        return $this->productPaths;
    }

    /**
     * ProductPaths specify which product elements are considered trusted and are excluded from the product suggestion process.
     *
     * @param list<string>|null $productPaths
     */
    public function setProductPaths(?array $productPaths): self
    {
        $this->initialized['productPaths'] = true;
        $this->productPaths = $productPaths;

        return $this;
    }
}
