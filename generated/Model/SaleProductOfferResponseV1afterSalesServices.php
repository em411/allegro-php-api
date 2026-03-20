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

class SaleProductOfferResponseV1afterSalesServices extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The implied warranty information.
     *
     * @var ImpliedWarranty|null
     */
    protected $impliedWarranty;
    /**
     * The return policy information.
     *
     * @var ReturnPolicy|null
     */
    protected $returnPolicy;
    /**
     * The warranty information.
     *
     * @var Warranty|null
     */
    protected $warranty;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The implied warranty information.
     */
    public function getImpliedWarranty(): ?ImpliedWarranty
    {
        return $this->impliedWarranty;
    }

    /**
     * The implied warranty information.
     */
    public function setImpliedWarranty(?ImpliedWarranty $impliedWarranty): self
    {
        $this->initialized['impliedWarranty'] = true;
        $this->impliedWarranty = $impliedWarranty;

        return $this;
    }

    /**
     * The return policy information.
     */
    public function getReturnPolicy(): ?ReturnPolicy
    {
        return $this->returnPolicy;
    }

    /**
     * The return policy information.
     */
    public function setReturnPolicy(?ReturnPolicy $returnPolicy): self
    {
        $this->initialized['returnPolicy'] = true;
        $this->returnPolicy = $returnPolicy;

        return $this;
    }

    /**
     * The warranty information.
     */
    public function getWarranty(): ?Warranty
    {
        return $this->warranty;
    }

    /**
     * The warranty information.
     */
    public function setWarranty(?Warranty $warranty): self
    {
        $this->initialized['warranty'] = true;
        $this->warranty = $warranty;

        return $this;
    }
}
