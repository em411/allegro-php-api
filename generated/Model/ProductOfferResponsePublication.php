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

class ProductOfferResponsePublication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The publication status of the product assigned to the offer:
     *  - `PROPOSED` - a new product proposal was created or an existing product in the review process was selected and assigned to the offer
     *  - `LISTED` - a reviewed product from our database was identified and assigned to the offer
     *  - `NOT_LISTED` - no new product proposal was created nor an existing product from database was assigned to the offer
     *  - `REMOVED` - the product review was negative or the product was merged with another product. This means that the product will soon be removed from the offer and you can assign a correct product.
     *
     * @var string|null
     */
    protected $status;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The publication status of the product assigned to the offer:
     *  - `PROPOSED` - a new product proposal was created or an existing product in the review process was selected and assigned to the offer
     *  - `LISTED` - a reviewed product from our database was identified and assigned to the offer
     *  - `NOT_LISTED` - no new product proposal was created nor an existing product from database was assigned to the offer
     *  - `REMOVED` - the product review was negative or the product was merged with another product. This means that the product will soon be removed from the offer and you can assign a correct product.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The publication status of the product assigned to the offer:
     * - `PROPOSED` - a new product proposal was created or an existing product in the review process was selected and assigned to the offer
     * - `LISTED` - a reviewed product from our database was identified and assigned to the offer
     * - `NOT_LISTED` - no new product proposal was created nor an existing product from database was assigned to the offer
     * - `REMOVED` - the product review was negative or the product was merged with another product. This means that the product will soon be removed from the offer and you can assign a correct product.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
