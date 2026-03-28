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

class FulfillmentRefundDispositionRefund extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Detailed refund status. Sample values include `NEW`, `IN_PROGRESS`, `SUCCESS`, `FAILURE`, `CANCELLED`, `PAYMENT_OPERATOR_NOT_SUPPORTED`, `UNTRACKED_REFUND_DETECTED`, `POSTPAID` and may change without prior notification.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Information about what should happen to finish the refund process. - `NO_ACTION_NEEDED` - nothing to do by seller, - `ACTION_NEEDED` - no automatic refund possible, refund should be managed by seller, - `IN_PROGRESS` - automatic refund started but not completed yet.
     *
     * @var string|null
     */
    protected $details;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Detailed refund status. Sample values include `NEW`, `IN_PROGRESS`, `SUCCESS`, `FAILURE`, `CANCELLED`, `PAYMENT_OPERATOR_NOT_SUPPORTED`, `UNTRACKED_REFUND_DETECTED`, `POSTPAID` and may change without prior notification.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Detailed refund status. Sample values include `NEW`, `IN_PROGRESS`, `SUCCESS`, `FAILURE`, `CANCELLED`, `PAYMENT_OPERATOR_NOT_SUPPORTED`, `UNTRACKED_REFUND_DETECTED`, `POSTPAID` and may change without prior notification.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Information about what should happen to finish the refund process. - `NO_ACTION_NEEDED` - nothing to do by seller, - `ACTION_NEEDED` - no automatic refund possible, refund should be managed by seller, - `IN_PROGRESS` - automatic refund started but not completed yet.
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * Information about what should happen to finish the refund process. - `NO_ACTION_NEEDED` - nothing to do by seller, - `ACTION_NEEDED` - no automatic refund possible, refund should be managed by seller, - `IN_PROGRESS` - automatic refund started but not completed yet.
     */
    public function setDetails(?string $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;

        return $this;
    }
}
