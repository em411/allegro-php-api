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

class BillingEntryTypeGroup implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Technical identifier of the billing type group.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Name of the billing type group. This value is translated based on the value of the "Accept-Language" header. By default a message in Polish is returned.
     *
     * @var string|null
     */
    protected $name;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Technical identifier of the billing type group.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Technical identifier of the billing type group.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Name of the billing type group. This value is translated based on the value of the "Accept-Language" header. By default a message in Polish is returned.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the billing type group. This value is translated based on the value of the "Accept-Language" header. By default a message in Polish is returned.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName']];
    }
}
