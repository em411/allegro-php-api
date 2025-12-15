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

class AdditionalServiceRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var AdditionalServiceDefinitionRequest|null
     */
    protected $definition;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var list<Configuration>|null
     */
    protected $configurations;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getDefinition(): ?AdditionalServiceDefinitionRequest
    {
        return $this->definition;
    }

    public function setDefinition(?AdditionalServiceDefinitionRequest $definition): self
    {
        $this->initialized['definition'] = true;
        $this->definition = $definition;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
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
}
