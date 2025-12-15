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

class AfterSalesServicesProductOfferRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var AfterSalesServicesProductOfferRequestImpliedWarranty|null
     */
    protected $impliedWarranty;
    /**
     * @var AfterSalesServicesProductOfferRequestReturnPolicy|null
     */
    protected $returnPolicy;
    /**
     * @var AfterSalesServicesProductOfferRequestWarranty|null
     */
    protected $warranty;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getImpliedWarranty(): ?AfterSalesServicesProductOfferRequestImpliedWarranty
    {
        return $this->impliedWarranty;
    }

    public function setImpliedWarranty(?AfterSalesServicesProductOfferRequestImpliedWarranty $impliedWarranty): self
    {
        $this->initialized['impliedWarranty'] = true;
        $this->impliedWarranty = $impliedWarranty;

        return $this;
    }

    public function getReturnPolicy(): ?AfterSalesServicesProductOfferRequestReturnPolicy
    {
        return $this->returnPolicy;
    }

    public function setReturnPolicy(?AfterSalesServicesProductOfferRequestReturnPolicy $returnPolicy): self
    {
        $this->initialized['returnPolicy'] = true;
        $this->returnPolicy = $returnPolicy;

        return $this;
    }

    public function getWarranty(): ?AfterSalesServicesProductOfferRequestWarranty
    {
        return $this->warranty;
    }

    public function setWarranty(?AfterSalesServicesProductOfferRequestWarranty $warranty): self
    {
        $this->initialized['warranty'] = true;
        $this->warranty = $warranty;

        return $this;
    }
}
