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

class LineItemVoucher extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The voucher code.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Describes the types of vouchers used in the lineItems. The types of vouchers can be as follows: * `NOTEBOOKS_FOR_TEACHERS` - a voucher for teacher's notebook action.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Describes the status of the current voucher. The status of voucher can be as follows: * `ACTIVE` - an active voucher, ready to use, * `CANCELLED` - a cancelled voucher, disabled to use.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The external transaction id. The value may differ depending on the status type.
     *
     * @var string|null
     */
    protected $externalTransactionId;
    /**
     * @var LineItemVoucherValue|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The voucher code.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The voucher code.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Describes the types of vouchers used in the lineItems. The types of vouchers can be as follows: * `NOTEBOOKS_FOR_TEACHERS` - a voucher for teacher's notebook action.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Describes the types of vouchers used in the lineItems. The types of vouchers can be as follows: * `NOTEBOOKS_FOR_TEACHERS` - a voucher for teacher's notebook action.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Describes the status of the current voucher. The status of voucher can be as follows: * `ACTIVE` - an active voucher, ready to use, * `CANCELLED` - a cancelled voucher, disabled to use.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Describes the status of the current voucher. The status of voucher can be as follows: * `ACTIVE` - an active voucher, ready to use, * `CANCELLED` - a cancelled voucher, disabled to use.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * The external transaction id. The value may differ depending on the status type.
     */
    public function getExternalTransactionId(): ?string
    {
        return $this->externalTransactionId;
    }

    /**
     * The external transaction id. The value may differ depending on the status type.
     */
    public function setExternalTransactionId(?string $externalTransactionId): self
    {
        $this->initialized['externalTransactionId'] = true;
        $this->externalTransactionId = $externalTransactionId;

        return $this;
    }

    public function getValue(): ?LineItemVoucherValue
    {
        return $this->value;
    }

    public function setValue(?LineItemVoucherValue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
