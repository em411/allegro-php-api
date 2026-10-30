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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class BillingEntries implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of billing types.
     *
     * @var list<BillingEntry>|null
     */
    protected $billingEntries;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of billing types.
     *
     * @return list<BillingEntry>|null
     */
    public function getBillingEntries(): ?array
    {
        return $this->billingEntries;
    }

    /**
     * List of billing types.
     *
     * @param list<BillingEntry>|null $billingEntries
     */
    public function setBillingEntries(?array $billingEntries): self
    {
        $this->initialized['billingEntries'] = true;
        $this->billingEntries = $billingEntries;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['billingEntries' => ['billingEntries', 'getBillingEntries', 'setBillingEntries']];
    }
}
