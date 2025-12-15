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

class DeductionChargeOperation extends BaseOperation
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Deduction.
     *
     * @var Deduction|null
     */
    protected $deduction;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Deduction.
     */
    public function getDeduction(): ?Deduction
    {
        return $this->deduction;
    }

    /**
     * Deduction.
     */
    public function setDeduction(?Deduction $deduction): self
    {
        $this->initialized['deduction'] = true;
        $this->deduction = $deduction;

        return $this;
    }
}
