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

class CheckoutFormsOrderInvoiceFileVerification extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Verification status. Always NOT_APPLICABLE in the REGULAR orderMode. In the UKRAINE_EXPORT orderMode can be WAITING, ACCEPTED, ACCEPTED_WITH_WARNINGS or REJECTED.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Contains warnings and errors when status is ACCEPTED_WITH_WARNINGS or REJECTED. Empty in other statuses.
     *
     * @var list<CheckoutFormsOrderInvoiceFileVerificationDetails>|null
     */
    protected $details;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Verification status. Always NOT_APPLICABLE in the REGULAR orderMode. In the UKRAINE_EXPORT orderMode can be WAITING, ACCEPTED, ACCEPTED_WITH_WARNINGS or REJECTED.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Verification status. Always NOT_APPLICABLE in the REGULAR orderMode. In the UKRAINE_EXPORT orderMode can be WAITING, ACCEPTED, ACCEPTED_WITH_WARNINGS or REJECTED.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Contains warnings and errors when status is ACCEPTED_WITH_WARNINGS or REJECTED. Empty in other statuses.
     *
     * @return list<CheckoutFormsOrderInvoiceFileVerificationDetails>|null
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }

    /**
     * Contains warnings and errors when status is ACCEPTED_WITH_WARNINGS or REJECTED. Empty in other statuses.
     *
     * @param list<CheckoutFormsOrderInvoiceFileVerificationDetails>|null $details
     */
    public function setDetails(?array $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;

        return $this;
    }
}
