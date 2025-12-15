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

class Wallet extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The payment operator.
     *
     * @var string|null
     */
    protected $paymentOperator;
    /**
     * The type of the wallet.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The wallet balance after the operation.
     *
     * @var WalletBalance|null
     */
    protected $balance;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The payment operator.
     */
    public function getPaymentOperator(): ?string
    {
        return $this->paymentOperator;
    }

    /**
     * The payment operator.
     */
    public function setPaymentOperator(?string $paymentOperator): self
    {
        $this->initialized['paymentOperator'] = true;
        $this->paymentOperator = $paymentOperator;

        return $this;
    }

    /**
     * The type of the wallet.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The type of the wallet.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The wallet balance after the operation.
     */
    public function getBalance(): ?WalletBalance
    {
        return $this->balance;
    }

    /**
     * The wallet balance after the operation.
     */
    public function setBalance(?WalletBalance $balance): self
    {
        $this->initialized['balance'] = true;
        $this->balance = $balance;

        return $this;
    }
}
