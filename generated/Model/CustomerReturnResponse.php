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

class CustomerReturnResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var int|null
     */
    protected $count;
    /**
     * List of matching customer returns.
     *
     * @var list<CustomerReturn>|null
     */
    protected $customerReturns;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * List of matching customer returns.
     *
     * @return list<CustomerReturn>|null
     */
    public function getCustomerReturns(): ?array
    {
        return $this->customerReturns;
    }

    /**
     * List of matching customer returns.
     *
     * @param list<CustomerReturn>|null $customerReturns
     */
    public function setCustomerReturns(?array $customerReturns): self
    {
        $this->initialized['customerReturns'] = true;
        $this->customerReturns = $customerReturns;

        return $this;
    }
}
