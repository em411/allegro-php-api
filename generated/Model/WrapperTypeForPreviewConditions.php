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

class WrapperTypeForPreviewConditions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Include in calculation user's active bundles which allow to publish for free offer or use for free promotion options.
     *
     * @var bool|null
     */
    protected $includeQuotingBundles;
    /**
     * @var ParametersForPreviewPrice|null
     */
    protected $offer;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Include in calculation user's active bundles which allow to publish for free offer or use for free promotion options.
     */
    public function getIncludeQuotingBundles(): ?bool
    {
        return $this->includeQuotingBundles;
    }

    /**
     * Include in calculation user's active bundles which allow to publish for free offer or use for free promotion options.
     */
    public function setIncludeQuotingBundles(?bool $includeQuotingBundles): self
    {
        $this->initialized['includeQuotingBundles'] = true;
        $this->includeQuotingBundles = $includeQuotingBundles;

        return $this;
    }

    public function getOffer(): ?ParametersForPreviewPrice
    {
        return $this->offer;
    }

    public function setOffer(?ParametersForPreviewPrice $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }
}
