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

class SaleProductOfferRequestBasedelivery extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Handling time, ISO 8601 duration format. This field must be set to one of the following: PT0S for immediately, PT24H, P2D, P3D, P4D, P5D, P7D, P10D, P14D, P21D, P30D, P60D.
     *
     * @var string|null
     */
    protected $handlingTime;
    /**
     * You can enter the shipping rates identifier or name.
     *
     * @var mixed|null
     */
    protected $shippingRates;
    /**
     * Additional information about delivery. Parameter is deprecated and will be removed in the future. Additional information is only visible on marketplace `allegro-pl`.
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $additionalInfo;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Handling time, ISO 8601 duration format. This field must be set to one of the following: PT0S for immediately, PT24H, P2D, P3D, P4D, P5D, P7D, P10D, P14D, P21D, P30D, P60D.
     */
    public function getHandlingTime(): ?string
    {
        return $this->handlingTime;
    }

    /**
     * Handling time, ISO 8601 duration format. This field must be set to one of the following: PT0S for immediately, PT24H, P2D, P3D, P4D, P5D, P7D, P10D, P14D, P21D, P30D, P60D.
     */
    public function setHandlingTime(?string $handlingTime): self
    {
        $this->initialized['handlingTime'] = true;
        $this->handlingTime = $handlingTime;

        return $this;
    }

    /**
     * You can enter the shipping rates identifier or name.
     */
    public function getShippingRates()
    {
        return $this->shippingRates;
    }

    /**
     * You can enter the shipping rates identifier or name.
     */
    public function setShippingRates($shippingRates): self
    {
        $this->initialized['shippingRates'] = true;
        $this->shippingRates = $shippingRates;

        return $this;
    }

    /**
     * Additional information about delivery. Parameter is deprecated and will be removed in the future. Additional information is only visible on marketplace `allegro-pl`.
     *
     * @deprecated
     */
    public function getAdditionalInfo(): ?string
    {
        return $this->additionalInfo;
    }

    /**
     * Additional information about delivery. Parameter is deprecated and will be removed in the future. Additional information is only visible on marketplace `allegro-pl`.
     *
     * @deprecated
     */
    public function setAdditionalInfo(?string $additionalInfo): self
    {
        $this->initialized['additionalInfo'] = true;
        $this->additionalInfo = $additionalInfo;

        return $this;
    }
}
