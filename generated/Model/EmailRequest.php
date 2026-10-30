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

class EmailRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The contact's email address. The user part (before `@`) cannot be longer than 64 characters.
     *
     * @var string|null
     */
    protected $address;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The contact's email address. The user part (before `@`) cannot be longer than 64 characters.
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * The contact's email address. The user part (before `@`) cannot be longer than 64 characters.
     */
    public function setAddress(?string $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['address' => ['address', 'getAddress', 'setAddress']];
    }
}
