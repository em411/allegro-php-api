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

class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Upper limit for quantity per package.
     *
     * @var int|null
     */
    protected $max;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Upper limit for quantity per package.
     */
    public function getMax(): ?int
    {
        return $this->max;
    }

    /**
     * Upper limit for quantity per package.
     */
    public function setMax(?int $max): self
    {
        $this->initialized['max'] = true;
        $this->max = $max;

        return $this;
    }
}
