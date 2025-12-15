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

class CpsConversionResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * CPS conversions list associated with filters and logged-in user.
     *
     * @var list<CpsConversion>|null
     */
    protected $conversions;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * CPS conversions list associated with filters and logged-in user.
     *
     * @return list<CpsConversion>|null
     */
    public function getConversions(): ?array
    {
        return $this->conversions;
    }

    /**
     * CPS conversions list associated with filters and logged-in user.
     *
     * @param list<CpsConversion>|null $conversions
     */
    public function setConversions(?array $conversions): self
    {
        $this->initialized['conversions'] = true;
        $this->conversions = $conversions;

        return $this;
    }
}
