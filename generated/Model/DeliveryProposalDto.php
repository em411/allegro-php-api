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

class DeliveryProposalDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $orderId;
    /**
     * @var ShipmentCreateRequestDto|null
     */
    protected $suggestedInput;
    /**
     * @var list<DeliveryOptionDto>|null
     */
    protected $deliveryOptions;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;

        return $this;
    }

    public function getSuggestedInput(): ?ShipmentCreateRequestDto
    {
        return $this->suggestedInput;
    }

    public function setSuggestedInput(?ShipmentCreateRequestDto $suggestedInput): self
    {
        $this->initialized['suggestedInput'] = true;
        $this->suggestedInput = $suggestedInput;

        return $this;
    }

    /**
     * @return list<DeliveryOptionDto>|null
     */
    public function getDeliveryOptions(): ?array
    {
        return $this->deliveryOptions;
    }

    /**
     * @param list<DeliveryOptionDto>|null $deliveryOptions
     */
    public function setDeliveryOptions(?array $deliveryOptions): self
    {
        $this->initialized['deliveryOptions'] = true;
        $this->deliveryOptions = $deliveryOptions;

        return $this;
    }
}
