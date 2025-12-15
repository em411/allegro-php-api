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

class CreateResponsibleProducerRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Internal name of responsible producer in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Responsible producer data.
     *
     * @var CreateResponsibleProducerRequestProducerData|null
     */
    protected $producerData;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Internal name of responsible producer in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Internal name of responsible producer in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
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
    public function getProducerData(): ?CreateResponsibleProducerRequestProducerData
    {
        return $this->producerData;
    }

    /**
     * Responsible producer data.
     */
    public function setProducerData(?CreateResponsibleProducerRequestProducerData $producerData): self
    {
        $this->initialized['producerData'] = true;
        $this->producerData = $producerData;

        return $this;
    }
}
