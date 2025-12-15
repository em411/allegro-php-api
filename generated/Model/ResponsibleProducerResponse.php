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

class ResponsibleProducerResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Responsible producer ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Internal name of responsible producer in dictionary.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Responsible producer data.
     *
     * @var ResponsibleProducerResponseProducerData|null
     */
    protected $producerData;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Responsible producer ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Responsible producer ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Internal name of responsible producer in dictionary.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Internal name of responsible producer in dictionary.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Responsible producer data.
     */
    public function getProducerData(): ?ResponsibleProducerResponseProducerData
    {
        return $this->producerData;
    }

    /**
     * Responsible producer data.
     */
    public function setProducerData(?ResponsibleProducerResponseProducerData $producerData): self
    {
        $this->initialized['producerData'] = true;
        $this->producerData = $producerData;

        return $this;
    }
}
