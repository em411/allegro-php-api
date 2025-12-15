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

class ReturnPolicyContact extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * A valid phone number of the seller.
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * A valid email address of the seller.
     *
     * @var string|null
     */
    protected $email;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * A valid phone number of the seller.
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * A valid phone number of the seller.
     */
    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * A valid email address of the seller.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * A valid email address of the seller.
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }
}
