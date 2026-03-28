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

class FulfillmentRefundDispositionsResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Refund dispositions matching the provided filters.
     *
     * @var list<FulfillmentRefundDisposition>|null
     */
    protected $report;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Refund dispositions matching the provided filters.
     *
     * @return list<FulfillmentRefundDisposition>|null
     */
    public function getReport(): ?array
    {
        return $this->report;
    }

    /**
     * Refund dispositions matching the provided filters.
     *
     * @param list<FulfillmentRefundDisposition>|null $report
     */
    public function setReport(?array $report): self
    {
        $this->initialized['report'] = true;
        $this->report = $report;

        return $this;
    }
}
