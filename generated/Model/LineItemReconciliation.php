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

class LineItemReconciliation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $value;
    /**
     * Reconciliation type used in the Allegro Prices program, in which the offer is included. The following values are possible: * `BILLING` - a reconciliation value is counted as a new entry in the billing * `WALLET` - a reconciliation value is added to the checkout form payment.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Quantity of reconciled items.
     *
     * @var int|null
     */
    protected $quantity;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The price data.
     */
    public function getValue(): ?Price
    {
        return $this->value;
    }

    /**
     * The price data.
     */
    public function setValue(?Price $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * Reconciliation type used in the Allegro Prices program, in which the offer is included. The following values are possible: * `BILLING` - a reconciliation value is counted as a new entry in the billing * `WALLET` - a reconciliation value is added to the checkout form payment.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Reconciliation type used in the Allegro Prices program, in which the offer is included. The following values are possible: * `BILLING` - a reconciliation value is counted as a new entry in the billing * `WALLET` - a reconciliation value is added to the checkout form payment.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Quantity of reconciled items.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Quantity of reconciled items.
     */
    public function setQuantity(?int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }
}
