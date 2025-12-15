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

class QuoteResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Quote fee name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Quote fee type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $fee;
    /**
     * Duration in ISO 8601 format.
     *
     * @var string|null
     */
    protected $cycleDuration;
    /**
     * @var ClassifiedPackage|null
     */
    protected $classifiedsPackage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Quote fee name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Quote fee name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Quote fee type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Quote fee type.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The price data.
     */
    public function getFee(): ?Price
    {
        return $this->fee;
    }

    /**
     * The price data.
     */
    public function setFee(?Price $fee): self
    {
        $this->initialized['fee'] = true;
        $this->fee = $fee;

        return $this;
    }

    /**
     * Duration in ISO 8601 format.
     */
    public function getCycleDuration(): ?string
    {
        return $this->cycleDuration;
    }

    /**
     * Duration in ISO 8601 format.
     */
    public function setCycleDuration(?string $cycleDuration): self
    {
        $this->initialized['cycleDuration'] = true;
        $this->cycleDuration = $cycleDuration;

        return $this;
    }

    public function getClassifiedsPackage(): ?ClassifiedPackage
    {
        return $this->classifiedsPackage;
    }

    public function setClassifiedsPackage(?ClassifiedPackage $classifiedsPackage): self
    {
        $this->initialized['classifiedsPackage'] = true;
        $this->classifiedsPackage = $classifiedsPackage;

        return $this;
    }
}
