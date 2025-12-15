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

class SaleProductOfferStatusResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var OfferId|null
     */
    protected $offer;
    /**
     * @var SaleProductOfferStatusResponseOperation|null
     */
    protected $operation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getOffer(): ?OfferId
    {
        return $this->offer;
    }

    public function setOffer(?OfferId $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    public function getOperation(): ?SaleProductOfferStatusResponseOperation
    {
        return $this->operation;
    }

    public function setOperation(?SaleProductOfferStatusResponseOperation $operation): self
    {
        $this->initialized['operation'] = true;
        $this->operation = $operation;

        return $this;
    }
}
