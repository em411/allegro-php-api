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

class FlexibleBundlesListingDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of bundles.
     *
     * @var list<FlexibleBundleListingDTO>|null
     */
    protected $bundles;
    /**
     * Next page information.
     *
     * @var FlexibleBundlesListingDTONextPage|null
     */
    protected $nextPage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of bundles.
     *
     * @return list<FlexibleBundleListingDTO>|null
     */
    public function getBundles(): ?array
    {
        return $this->bundles;
    }

    /**
     * List of bundles.
     *
     * @param list<FlexibleBundleListingDTO>|null $bundles
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
    public function getNextPage(): ?FlexibleBundlesListingDTONextPage
    {
        return $this->nextPage;
    }

    /**
     * Next page information.
     */
    public function setNextPage(?FlexibleBundlesListingDTONextPage $nextPage): self
    {
        $this->initialized['nextPage'] = true;
        $this->nextPage = $nextPage;

        return $this;
    }
}
