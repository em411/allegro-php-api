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

class ImpliedWarrantyPeriod extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Period in ISO 8601 format. Only periods in full years are accepted.
     *
     * @var string|null
     */
    protected $period;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Period in ISO 8601 format. Only periods in full years are accepted.
     */
    public function getPeriod(): ?string
    {
        return $this->period;
    }

    /**
     * Period in ISO 8601 format. Only periods in full years are accepted.
     */
    public function setPeriod(?string $period): self
    {
        $this->initialized['period'] = true;
        $this->period = $period;

        return $this;
    }
}
