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

class ThirdParty extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Third party name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Third party order number.
     *
     * @var string|null
     */
    protected $orderNumber;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Third party name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Third party name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Third party order number.
     */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    /**
     * Third party order number.
     */
    public function setOrderNumber(?string $orderNumber): self
    {
        $this->initialized['orderNumber'] = true;
        $this->orderNumber = $orderNumber;

        return $this;
    }
}
