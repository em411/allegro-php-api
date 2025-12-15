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

class CustomerReturnRefundRejectionRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Refund rejection.
     *
     * @var CustomerReturnRefundRejectionRequestRejection|null
     */
    protected $rejection;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Refund rejection.
     */
    public function getRejection(): ?CustomerReturnRefundRejectionRequestRejection
    {
        return $this->rejection;
    }

    /**
     * Refund rejection.
     */
    public function setRejection(?CustomerReturnRefundRejectionRequestRejection $rejection): self
    {
        $this->initialized['rejection'] = true;
        $this->rejection = $rejection;

        return $this;
    }
}
