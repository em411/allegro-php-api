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

class WrapsListingAndCommissionsFees extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<DescribesSuccessCommissionFee>|null
     */
    protected $commissions;
    /**
     * @var list<DescribesListingFee>|null
     */
    protected $quotes;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<DescribesSuccessCommissionFee>|null
     */
    public function getCommissions(): ?array
    {
        return $this->commissions;
    }

    /**
     * @param list<DescribesSuccessCommissionFee>|null $commissions
     */
    public function setCommissions(?array $commissions): self
    {
        $this->initialized['commissions'] = true;
        $this->commissions = $commissions;

        return $this;
    }

    /**
     * @return list<DescribesListingFee>|null
     */
    public function getQuotes(): ?array
    {
        return $this->quotes;
    }

    /**
     * @param list<DescribesListingFee>|null $quotes
     */
    public function setQuotes(?array $quotes): self
    {
        $this->initialized['quotes'] = true;
        $this->quotes = $quotes;

        return $this;
    }
}
