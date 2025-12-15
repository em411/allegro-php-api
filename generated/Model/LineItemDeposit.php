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

class LineItemDeposit extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $price;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The price data.
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }

    /**
     * The price data.
     */
    public function setPrice(?Price $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }
}
