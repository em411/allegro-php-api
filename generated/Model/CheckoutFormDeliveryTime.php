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

class CheckoutFormDeliveryTime extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ISO date when the earliest delivery attempt can take place.
     *
     * @var \DateTime|null
     */
    protected $from;
    /**
     * ISO date when the latest delivery attempt can take place.
     *
     * @var \DateTime|null
     */
    protected $to;
    /**
     * Guaranteed date when first delivery attempt takes place. This is always filled for Allegro One Courier delivery method. This field is deprecated in favor of `delivery.time.from` and `delivery.time.to`.
     *
     * @deprecated
     *
     * @var CheckoutFormDeliveryTimeGuaranteed|null
     */
    protected $guaranteed;
    /**
     * Dates when delivery should be dispatched, passed to the provider.
     *
     * @var CheckoutFormDeliveryTimeDispatch|null
     */
    protected $dispatch;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ISO date when the earliest delivery attempt can take place.
     */
    public function getFrom(): ?\DateTime
    {
        return $this->from;
    }

    /**
     * ISO date when the earliest delivery attempt can take place.
     */
    public function setFrom(?\DateTime $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;

        return $this;
    }

    /**
     * ISO date when the latest delivery attempt can take place.
     */
    public function getTo(): ?\DateTime
    {
        return $this->to;
    }

    /**
     * ISO date when the latest delivery attempt can take place.
     */
    public function setTo(?\DateTime $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;

        return $this;
    }

    /**
     * Guaranteed date when first delivery attempt takes place. This is always filled for Allegro One Courier delivery method. This field is deprecated in favor of `delivery.time.from` and `delivery.time.to`.
     *
     * @deprecated
     */
    public function getGuaranteed(): ?CheckoutFormDeliveryTimeGuaranteed
    {
        return $this->guaranteed;
    }

    /**
     * Guaranteed date when first delivery attempt takes place. This is always filled for Allegro One Courier delivery method. This field is deprecated in favor of `delivery.time.from` and `delivery.time.to`.
     *
     * @deprecated
     */
    public function setGuaranteed(?CheckoutFormDeliveryTimeGuaranteed $guaranteed): self
    {
        $this->initialized['guaranteed'] = true;
        $this->guaranteed = $guaranteed;

        return $this;
    }

    /**
     * Dates when delivery should be dispatched, passed to the provider.
     */
    public function getDispatch(): ?CheckoutFormDeliveryTimeDispatch
    {
        return $this->dispatch;
    }

    /**
     * Dates when delivery should be dispatched, passed to the provider.
     */
    public function setDispatch(?CheckoutFormDeliveryTimeDispatch $dispatch): self
    {
        $this->initialized['dispatch'] = true;
        $this->dispatch = $dispatch;

        return $this;
    }
}
