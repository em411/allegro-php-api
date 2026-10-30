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

class RefundClaimRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Purchase for which a refund application will be created.
     *
     * @var RefundClaimRequestLineItem|null
     */
    protected $lineItem;
    /**
     * Quantity of product for which the refund application will be created. Must be greater than zero.
     *
     * @var int|null
     */
    protected $quantity;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Purchase for which a refund application will be created.
     */
    public function getLineItem(): ?RefundClaimRequestLineItem
    {
        return $this->lineItem;
    }

    /**
     * Purchase for which a refund application will be created.
     */
    public function setLineItem(?RefundClaimRequestLineItem $lineItem): self
    {
        $this->initialized['lineItem'] = true;
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * Quantity of product for which the refund application will be created. Must be greater than zero.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Quantity of product for which the refund application will be created. Must be greater than zero.
     */
    public function setQuantity(?int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['lineItem' => ['lineItem', 'getLineItem', 'setLineItem'], 'quantity' => ['quantity', 'getQuantity', 'setQuantity']];
    }
}
