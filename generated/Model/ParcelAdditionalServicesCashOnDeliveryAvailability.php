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

class ParcelAdditionalServicesCashOnDeliveryAvailability extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates if Cash On Delivery is available as part of Additional Services for parcel creation for carrier.
     *
     * @var bool|null
     */
    protected $available;
    /**
     * Postpaid Express service available. Postpaid value is send to parcel sender in one business day after delivery.
     *
     * @var bool|null
     */
    protected $expressAvailable;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates if Cash On Delivery is available as part of Additional Services for parcel creation for carrier.
     */
    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    /**
     * Indicates if Cash On Delivery is available as part of Additional Services for parcel creation for carrier.
     */
    public function setAvailable(?bool $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;

        return $this;
    }

    /**
     * Postpaid Express service available. Postpaid value is send to parcel sender in one business day after delivery.
     */
    public function getExpressAvailable(): ?bool
    {
        return $this->expressAvailable;
    }

    /**
     * Postpaid Express service available. Postpaid value is send to parcel sender in one business day after delivery.
     */
    public function setExpressAvailable(?bool $expressAvailable): self
    {
        $this->initialized['expressAvailable'] = true;
        $this->expressAvailable = $expressAvailable;

        return $this;
    }
}
