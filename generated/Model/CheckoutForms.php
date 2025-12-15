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

class CheckoutForms extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<CheckoutForm>|null
     */
    protected $checkoutForms;
    /**
     * number of returned objects.
     *
     * @var float|null
     */
    protected $count;
    /**
     * Number of all objects of requested status(es) available (regardless of the provided limit and offset).
     *
     * @var float|null
     */
    protected $totalCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<CheckoutForm>|null
     */
    public function getCheckoutForms(): ?array
    {
        return $this->checkoutForms;
    }

    /**
     * @param list<CheckoutForm>|null $checkoutForms
     */
    public function setCheckoutForms(?array $checkoutForms): self
    {
        $this->initialized['checkoutForms'] = true;
        $this->checkoutForms = $checkoutForms;

        return $this;
    }

    /**
     * number of returned objects.
     */
    public function getCount(): ?float
    {
        return $this->count;
    }

    /**
     * number of returned objects.
     */
    public function setCount(?float $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * Number of all objects of requested status(es) available (regardless of the provided limit and offset).
     */
    public function getTotalCount(): ?float
    {
        return $this->totalCount;
    }

    /**
     * Number of all objects of requested status(es) available (regardless of the provided limit and offset).
     */
    public function setTotalCount(?float $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }
}
