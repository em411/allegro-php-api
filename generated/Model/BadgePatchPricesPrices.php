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

class BadgePatchPricesPrices extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var BadgePatchPricesPricesBargain|null
     */
    protected $bargain;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getBargain(): ?BadgePatchPricesPricesBargain
    {
        return $this->bargain;
    }

    public function setBargain(?BadgePatchPricesPricesBargain $bargain): self
    {
        $this->initialized['bargain'] = true;
        $this->bargain = $bargain;

        return $this;
    }
}
