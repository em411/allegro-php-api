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

class B2b extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * If true, then only users with company account are eligible to buy given offer. Offers buyable only by business are allowed only in selected categories. False by default.
     *
     * @var bool|null
     */
    protected $buyableOnlyByBusiness;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * If true, then only users with company account are eligible to buy given offer. Offers buyable only by business are allowed only in selected categories. False by default.
     */
    public function getBuyableOnlyByBusiness(): ?bool
    {
        return $this->buyableOnlyByBusiness;
    }

    /**
     * If true, then only users with company account are eligible to buy given offer. Offers buyable only by business are allowed only in selected categories. False by default.
     */
    public function setBuyableOnlyByBusiness(?bool $buyableOnlyByBusiness): self
    {
        $this->initialized['buyableOnlyByBusiness'] = true;
        $this->buyableOnlyByBusiness = $buyableOnlyByBusiness;

        return $this;
    }
}
