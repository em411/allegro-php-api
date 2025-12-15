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

class AdditionalServiceResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<Configuration>|null
     */
    protected $configurations;
    /**
     * @var BasicDefinitionResponse|null
     */
    protected $definition;
    /**
     * This is a description provided by merchant while configuring additional service group.
     *
     * @var string|null
     */
    protected $description;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<Configuration>|null
     */
    public function getConfigurations(): ?array
    {
        return $this->configurations;
    }

    /**
     * @param list<Configuration>|null $configurations
     */
    public function setConfigurations(?array $configurations): self
    {
        $this->initialized['configurations'] = true;
        $this->configurations = $configurations;

        return $this;
    }

    public function getDefinition(): ?BasicDefinitionResponse
    {
        return $this->definition;
    }

    public function setDefinition(?BasicDefinitionResponse $definition): self
    {
        $this->initialized['definition'] = true;
        $this->definition = $definition;

        return $this;
    }

    /**
     * This is a description provided by merchant while configuring additional service group.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * This is a description provided by merchant while configuring additional service group.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
