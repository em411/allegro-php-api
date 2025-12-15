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

class CheckoutFormSummary extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var CheckoutFormSummaryTotalToPay|null
     */
    protected $totalToPay;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getTotalToPay(): ?CheckoutFormSummaryTotalToPay
    {
        return $this->totalToPay;
    }

    public function setTotalToPay(?CheckoutFormSummaryTotalToPay $totalToPay): self
    {
        $this->initialized['totalToPay'] = true;
        $this->totalToPay = $totalToPay;

        return $this;
    }
}
