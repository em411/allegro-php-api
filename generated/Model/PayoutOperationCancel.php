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

class PayoutOperationCancel extends BaseOperation
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Payout.
     *
     * @var Payout|null
     */
    protected $payout;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Payout.
     */
    public function getPayout(): ?Payout
    {
        return $this->payout;
    }

    /**
     * Payout.
     */
    public function setPayout(?Payout $payout): self
    {
        $this->initialized['payout'] = true;
        $this->payout = $payout;

        return $this;
    }
}
