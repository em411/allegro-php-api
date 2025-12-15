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

class OfferBundlesDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Seller's bundles.
     *
     * @var list<OfferBundleDTO>|null
     */
    protected $bundles;
    /**
     * Next page information.
     *
     * @var OfferBundlesDTONextPage|null
     */
    protected $nextPage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Seller's bundles.
     *
     * @return list<OfferBundleDTO>|null
     */
    public function getBundles(): ?array
    {
        return $this->bundles;
    }

    /**
     * Seller's bundles.
     *
     * @param list<OfferBundleDTO>|null $bundles
     */
    public function setBundles(?array $bundles): self
    {
        $this->initialized['bundles'] = true;
        $this->bundles = $bundles;

        return $this;
    }

    /**
     * Next page information.
     */
    public function getNextPage(): ?OfferBundlesDTONextPage
    {
        return $this->nextPage;
    }

    /**
     * Next page information.
     */
    public function setNextPage(?OfferBundlesDTONextPage $nextPage): self
    {
        $this->initialized['nextPage'] = true;
        $this->nextPage = $nextPage;

        return $this;
    }
}
