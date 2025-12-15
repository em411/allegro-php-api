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

class TaxIdResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * User's tax identification number.
     *
     * @var string|null
     */
    protected $taxId;
    /**
     * Tax identification number verification status. Only the ACCEPTED status allows you to send products to the Allegro Warehouse.
     *
     * @var string|null
     */
    protected $verificationStatus;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * User's tax identification number.
     */
    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    /**
     * User's tax identification number.
     */
    public function setTaxId(?string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * Tax identification number verification status. Only the ACCEPTED status allows you to send products to the Allegro Warehouse.
     */
    public function getVerificationStatus(): ?string
    {
        return $this->verificationStatus;
    }

    /**
     * Tax identification number verification status. Only the ACCEPTED status allows you to send products to the Allegro Warehouse.
     */
    public function setVerificationStatus(?string $verificationStatus): self
    {
        $this->initialized['verificationStatus'] = true;
        $this->verificationStatus = $verificationStatus;

        return $this;
    }
}
