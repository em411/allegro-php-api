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

class Company extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * User's company name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * User's tax identification number.
     *
     * @var string|null
     */
    protected $taxId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * User's company name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * User's company name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
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
}
