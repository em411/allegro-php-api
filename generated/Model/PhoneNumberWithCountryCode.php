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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class PhoneNumberWithCountryCode implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Country code without neither + nor 0 prefix.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Local phone number without prefix.
     *
     * @var string|null
     */
    protected $number;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Country code without neither + nor 0 prefix.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Country code without neither + nor 0 prefix.
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Local phone number without prefix.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Local phone number without prefix.
     */
    public function setNumber(?string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['countryCode' => ['countryCode', 'getCountryCode', 'setCountryCode'], 'number' => ['number', 'getNumber', 'setNumber']];
    }
}
