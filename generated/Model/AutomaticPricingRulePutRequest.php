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

class AutomaticPricingRulePutRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The rule name. Default rule names are automatically translated based on the value provided in the the "Accept-Language" header.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var array<string, mixed>|null
     */
    protected $configuration;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The rule name. Default rule names are automatically translated based on the value provided in the the "Accept-Language" header.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The rule name. Default rule names are automatically translated based on the value provided in the the "Accept-Language" header.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getConfiguration(): ?iterable
    {
        return $this->configuration;
    }

    /**
     * @param array<string, mixed>|null $configuration
     */
    public function setConfiguration(?iterable $configuration): self
    {
        $this->initialized['configuration'] = true;
        $this->configuration = $configuration;

        return $this;
    }
}
