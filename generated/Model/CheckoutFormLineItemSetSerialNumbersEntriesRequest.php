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

class CheckoutFormLineItemSetSerialNumbersEntriesRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<CheckoutFormLineItemSetSerialNumbersEntryRequest>|null
     */
    protected $entries;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<CheckoutFormLineItemSetSerialNumbersEntryRequest>|null
     */
    public function getEntries(): ?array
    {
        return $this->entries;
    }

    /**
     * @param list<CheckoutFormLineItemSetSerialNumbersEntryRequest>|null $entries
     */
    public function setEntries(?array $entries): self
    {
        $this->initialized['entries'] = true;
        $this->entries = $entries;

        return $this;
    }
}
