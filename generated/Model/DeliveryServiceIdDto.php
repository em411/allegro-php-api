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

class DeliveryServiceIdDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Id of delivery method, chosen by buyer in order. If the Method ID is blank, then the system will automatically read it from the order.
     *
     * @var string|null
     */
    protected $deliveryMethodId;
    /**
     * ID of merchant agreement, registered in WZA. For Allegro Standard methods, this field is null.
     *
     * @var string|null
     */
    protected $credentialsId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Id of delivery method, chosen by buyer in order. If the Method ID is blank, then the system will automatically read it from the order.
     */
    public function getDeliveryMethodId(): ?string
    {
        return $this->deliveryMethodId;
    }

    /**
     * Id of delivery method, chosen by buyer in order. If the Method ID is blank, then the system will automatically read it from the order.
     */
    public function setDeliveryMethodId(?string $deliveryMethodId): self
    {
        $this->initialized['deliveryMethodId'] = true;
        $this->deliveryMethodId = $deliveryMethodId;

        return $this;
    }

    /**
     * ID of merchant agreement, registered in WZA. For Allegro Standard methods, this field is null.
     */
    public function getCredentialsId(): ?string
    {
        return $this->credentialsId;
    }

    /**
     * ID of merchant agreement, registered in WZA. For Allegro Standard methods, this field is null.
     */
    public function setCredentialsId(?string $credentialsId): self
    {
        $this->initialized['credentialsId'] = true;
        $this->credentialsId = $credentialsId;

        return $this;
    }
}
