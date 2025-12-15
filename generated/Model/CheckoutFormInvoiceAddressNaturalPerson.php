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

class CheckoutFormInvoiceAddressNaturalPerson extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Invoice receiver first name.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * Invoice receiver last name.
     *
     * @var string|null
     */
    protected $lastName;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Invoice receiver first name.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Invoice receiver first name.
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Invoice receiver last name.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Invoice receiver last name.
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }
}
